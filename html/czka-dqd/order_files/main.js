AUI().use("aui-base","aui-io-plugin-deprecated",function(a){Liferay.namespace("Notifications");Liferay.Notifications={viewNotification:function(e){var b=this;var g=e.currentTarget;var d=g.attr("data-href");if(d){var c=g.attr("data-markAsReadURL");if(c){a.io.request(c,{after:{success:function(i,m,l){var h=this.get("responseData");if(h.success){var k=g.ancestor(".user-notification");if(k){k.removeClass("unread");var j=k.one(".content .read");if(j){j.setHTML('\u010c\u00ed\u0073\u0074')}b._redirect(d)}}}},dataType:"json"})}else{var f=g.ancestor(".user-notification");if(f){b._redirect(d)}}}},_openWindow:function(b){if(b.match("p_p_state=maximized")||b.match("p_p_state=pop_up")||b.match("p_p_state=exclusive")){return true}return false},_redirect:function(d){var b=this;if(b._openWindow(d)){Liferay.Util.openWindow({id:"notificationsWindow",uri:d})}else{var c=Liferay.Util.getTop();c.location.href=d}}}});