var AMG;
if (typeof AMG == "undefined") AMG = {};
if (typeof AMG.ScreenKeyboard == "undefined") {
	
	AMG.ScreenKeyboard = Class.create({
		
		inputs: null,
		fieldsetId: null,
		form: null,
		keys: null,
		passwordInput: null,
		submitCallback: null,
		
		initialize: function(fieldsetId, submitCallback, noSubmitButton){
			var self = this;
			this.noSubmitButton = noSubmitButton;
			this.fieldsetId = fieldsetId;
			this.submitCallback = submitCallback;
			this.inputs = $$('#' + fieldsetId + ' input');
			this.form = this.inputs[0].form;
			
			//wszystkie przyciski klawiatury
			this.keys = $$('#keyboard-overlay #keyboard li:not(.no-input) a');
			//jezeli pola password
			(this.inputs[0].type=='password')? this.passwordInput = true: this.passwordInput = false;
			
			//focus na pierwszy input
			if(this.passwordInput) {
				var firstInp = this.findInputToFill();
				if(firstInp) firstInp.focus();
			}
			
			//aktywator klawiatury
			$(fieldsetId + '-activator').observe('click', function(event){
				self.createCurtain('keyboard-overlay', fieldsetId);
				self.registerKeyboardObservers();
				//focus first element
				self.inputs[0].focus();
				Event.stop(event);
			});
			
			
		},
		
		registerKeyboardObservers: function(){
			
			var self = this;
			
			//observery klawiszy klawiatury ekranowej
			this.keys.each(function(element){
				element.observe('click', function(event){
					Event.stop(event);					
					var el = Event.element(event);
					//text node - zeby pozbyc sie entities
					var text = el.childNodes[0].nodeValue;					
					// dla pol hasla
					if(self.passwordInput && self.inputs[0].readAttribute('maxlength')==1){
						var lastInput = self.findInputToFill();
						if(lastInput){
							lastInput.value = text;
							var nextToFill = self.findInputToFill();
							if(nextToFill) nextToFill.focus();
						}else{
							return;
						}
						//alert('text:' + text);
					}else{
						//jedno pole input - id usera, token
						self.inputs[0].value += text;
						self.inputs[0].focus();
					}
				});
			});
			
			//Caps Lock
			$$('#key-caps a')[0].observe('click', function(event){
				var el = Event.element(event);
				var capsOn = el.up().hasClassName('on');
				if(capsOn){
					el.up().removeClassName('on');
				}else{
					el.up().addClassName('on');
				}
				toggleCaps(!capsOn);
				var nextToFill = self.findInputToFill();
				if(nextToFill) nextToFill.focus();
				Event.stop(event);
			});
			
			//Backspace
			$$('#key-backspace a')[0].observe('click', function(event){
				var el = Event.element(event);
				if(self.passwordInput){
					var lastFilled = self.findInputLastFilled();
					if(lastFilled) {
						lastFilled.value='';
						lastFilled.focus();
					}
				}else{
					var all = self.inputs[0].value.split('');
					var last = all.pop();
					self.inputs[0].value = all.join('');
					self.inputs[0].focus();
				}
				Event.stop(event);
			});
			
			//clear button z kontenera z klawiatura
			$('clear-all').observe('click', function(event){
				self.clearAllInputs();
				Event.stop(event);
			});
			
			//close z kontenera z klawiatura
			$('close-button').observe('click', function(event){
				var el = Event.element(event);
				var popup = el.ancestors()[1];
				self.insertToInitialPosition();
				self.popupClose(popup);
				Event.stop(event);
			});
			
			//cancel z kontenera z klawiatura
			$('cancel-button').observe('click', function(event){
				var el = Event.element(event);
				var popup = el.ancestors()[3];
				self.insertToInitialPosition();
				self.clearAllInputs();
				self.popupClose(popup);
				Event.stop(event);
			});
			//submit w kontenarze z klawiatura - przepisywany input(y) z powrotem tam gdzie byly przed wlaczeniem klawiatury i ew. submit formularza
		/*	if(this.noSubmitButton==false || this.noSubmitButton==null){
				$('submit-button').observe('click', function(event){
					var el = Event.element(event);
					var popup = el.ancestors()[4];
					self.insertToInitialPosition();
					self.popupClose(popup);
					//callback
					self.submitCallback(self.form, self.fieldsetId);
					Event.stop(event);
				});
			}else{
				$('submit-button').hide();
				$('close-btn-2').show();*/
				$('close-btn-2').observe('click', function(event){
					var el = Event.element(event);
					var popup = el.ancestors()[4];
					self.insertToInitialPosition();
					self.popupClose(popup);
					Event.stop(event);
				});
			//}
			
			self.inputs[self.inputs.length-1].observe('keypress', function(event){
				if(event.keyCode == 13) {
					self.insertToInitialPosition();
					var popup = $('keyboard-overlay-popup');
					self.popupClose(popup);
					self.submitCallback(self.form, self.fieldsetId);
				}
			});
			
		
			function toggleCaps(state){
				var regex = /([a-zA-ZZąćęłńóśźżĄĆĘŁŃÓŚŹŻ])/;
				self.keys.each(function(el){
					if(state && regex.test(el.childNodes[0].nodeValue)){
						el.innerHTML = el.innerHTML.toUpperCase();
					}else{
						el.innerHTML = el.innerHTML.toLowerCase();
					}
				});
			};
		},
		
		//wstawia inpua i klawiature na poczatkowa pozycje
		insertToInitialPosition: function(){
			var keyboard = $('keyboard-overlay');
			$(this.fieldsetId + '-container').insert($(this.fieldsetId));
			$('keyboard-overlay-container').insert(keyboard);
			keyboard.addClassName('keyboard-closed');
		},
		
		
		destroyKeyboardObservers: function(){
			this.keys.each(function(element){
				element.stopObserving('click');
			});
			//jak beda problemy to mozna usunac szybciej, bez wybierania elementow poprzez $/$$
			$$('#key-caps a')[0].stopObserving('click');
			$$('#key-backspace a')[0].stopObserving('click');
			$('clear-all').stopObserving('click');
			$('close-button').stopObserving('click');
			$('cancel-button').stopObserving('click');
			/*if(this.noSubmitButton==false || this.noSubmitButton==null){
				$('submit-button').stopObserving('click');
			}else{*/
				if($('close-btn-2'))$('close-btn-2').stopObserving('click');
			//}
		},
		
		
		findInputToFill: function(){
			var inputs = this.inputs;
			for(var i=0; i<inputs.length; i++){
				var el = inputs[i];
				if(!el.disabled && el.value==""){
					return el;
				}
			}
			return null;
		},
			
		findInputLastFilled: function(){
			var inputs = this.inputs;
			for(var i=(inputs.length-1); i>=0; i--){
				var el = inputs[i];
				if(!el.disabled && el.value!=""){
					return el;
				}
			}
			return null;
		},
			
		clearAllInputs: function(){
			var inputs = this.inputs;
			for(var i=(inputs.length-1); i>=0; i--){
				var el = inputs[i];
				if(!el.disabled && el.value!=""){
					el.value = '';
				}
			}
			var nextToFill = this.findInputToFill();
			if(nextToFill) nextToFill.focus();
		},
		
		createCurtain: function(eid, fieldsetId) {
	        var	popup = $(eid + '-popup');
			var curtain = $(eid + '-popup-curtain');
			var element = $(eid);
			
	        // kurtyna jako iframe zeby przykrywala dropdown
			if (!curtain) {
				curtain = new Element('iframe', { id: eid + '-popup-curtain', frameBorder: '0' }).addClassName('curtain');
				document.body.appendChild(curtain);				
			} else {
				curtain.show();
			}        

	        // zmiana sposobu wyliczania wysokosci na potrzeby FF, w ktorej wartwa nie byla pelna
			var height = document.viewport.getHeight() > document.documentElement.scrollHeight ? document.viewport.getHeight() : document.documentElement.scrollHeight;
			curtain.setStyle({ height: height + 'px', position: 'absolute', top:'0', left:'0' });
		
			if (!popup) {
				popup = new Element('div', { id: eid + '-popup'}).addClassName('popup');
				($$("body")[0]).appendChild(popup);
				popup.appendChild(element);
				element.removeClassName('keyboard-closed');
				//popup.select('#close-button')[0].insert({'after': $(fieldsetId) });
				$('keyboard-input-container').insert($(fieldsetId));
			} else {
				popup.update('');
				popup.show();
			}
			document.documentElement.scrollTop = 0;
		},
		
		popupClose: function(popup) {
			popup = $(popup);
			if (popup) {
				var curtain = $(popup.id + '-curtain');
				popup.remove();
				if (curtain) curtain.remove();
				var nextToFill = this.findInputToFill();
				if(nextToFill) nextToFill.focus();
				this.destroyKeyboardObservers();
			}
		}
		
	});
};

