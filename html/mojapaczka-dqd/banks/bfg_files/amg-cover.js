/* ---------------------------------------------------------------------------------------
	amg-cover
--------------------------------------------------------------------------------------- */


var AMG;
if (typeof AMG == "undefined") AMG = {};
if (typeof AMG.Cover == "undefined") {
	
	AMG.Cover = Class.create({
		
		coverClassName: 'page-cover',
		coverId: 'page-cover',
		cover: null,
		message: null,
		showMessage: true,
		waitText: 'Unlocalized wait text',
		
		
		initialize: function(coverClassName, coverId,  showMessage){
			this.coverClassName = coverClassName || this.coverClassName;
			if(showMessage!=null){
				this.showMessage = showMessage;
			}
			this.waitText = getLocalizedMessage('screenConfirm-flow.title');
			
			$$('body')[0].observe('keydown', function(event){Event.stop(event);return false;});
			
			this.coverId = coverId || this.coverId;
			this.cover = $(this.coverId + '-iframe');
			this.coverDiv = $(this.coverId);
			this.message = $(this.coverId + '-message');
			
			if(!this.cover){
				this.cover = new Element('iframe', { id: this.coverId + '-iframe', frameBorder: '0' }).addClassName('page-cover-iframe');
				this.coverDiv = new Element('div', { id: this.coverId }).addClassName(this.coverClassName);
				this.message = new Element('span', { id: this.coverId + '-message' }).addClassName(this.coverClassName + '-message');
				this.message0 = new Element('span').addClassName(this.coverClassName + '-message0');
				this.message1 = new Element('span').addClassName(this.coverClassName + '-message1');
				this.message1.update(this.waitText);
				
				document.body.appendChild(this.cover);
				document.body.appendChild(this.coverDiv);
				
				this.message0.appendChild(this.message1);
				this.message.appendChild(this.message0);
				
				if(this.showMessage) document.body.appendChild(this.message);
				var height = document.viewport.getHeight() > document.documentElement.scrollHeight ? document.viewport.getHeight() : document.documentElement.scrollHeight;
				this.cover.setStyle({ height: height + 'px', position: 'absolute', top:'0', left:'0' });
				this.coverDiv.setStyle({ height: height + 'px', position: 'absolute', top:'0', left:'0' });
			}else{
				var height = document.viewport.getHeight() > document.documentElement.scrollHeight ? document.viewport.getHeight() : document.documentElement.scrollHeight;
				this.cover.setStyle({ height: height + 'px', position: 'absolute', top:'0', left:'0' });
				this.coverDiv.setStyle({ height: height + 'px', position: 'absolute', top:'0', left:'0' });
				this.cover.show();
				this.coverDiv.show();
				if(this.showMessage) this.message.show();
			}
			return this.coverDiv;
		},
		
		remove: function(permanently){
			if(permanently){
				this.cover.remove();
				this.coverDiv.remove();
			}else{
				if(this.coverDiv) {
					this.cover.hide();
					this.coverDiv.hide();
					if(this.showMessage) this.message.hide();
				}
			}
			$$('body')[0].stopObserving('keydown');
		},
		
		adjustHeight: function(){
			var height = document.viewport.getHeight() > document.documentElement.scrollHeight ? document.viewport.getHeight() : document.documentElement.scrollHeight;
			this.cover.setStyle({ height: height + 'px', position: 'absolute', top:'0', left:'0' });
			this.coverDiv.setStyle({ height: height + 'px', position: 'absolute', top:'0', left:'0' });
		}
	});
};



