(window.webpackJsonp=window.webpackJsonp||[]).push([[0],{0:function(e,s,n){e.exports=n("gmml")},gmml:function(e,s,n){"use strict";n.r(s),function(){var e,s,n,t,o;window.addEventListener("message",(function(i){var r=i.data,a=i.origin,c=i.source;if("OP_INIT"===r.id){console.log("[OP IFrame] receive message");var p,u,f,m,g=((m=document.createElement("a")).href=document.referrer,m.origin||(u=(p=m).port,(f=p.protocol)+"//"+p.hostname+(!u||"https:"===f&&"443"===u?"":":"+u)));if(a===g){var d=/([^ ]+) (.+)/;if(d.test(r.message)){var l=d.exec(r.message);e=l[1],s=l[2],n=a,t=c,o||function i(r){o=setTimeout((function(){!function(e,s,n,t,o){var i,r=((i={}).client_id=e,i.session_state=s,i.origin_uri=n,i),a=new XMLHttpRequest;a.open("POST",function(){var e=window.location,s=e.port;return e.protocol+"//"+e.hostname+(s?":"+s:"")}()+"/mep/fs/fl/oidc/v1/sessioninfo",!0),a.setRequestHeader("Accept","application/json"),a.setRequestHeader("Content-Type","application/json"),a.onreadystatechange=function(){if(4==a.readyState)if(200==a.status){var e=JSON.parse(a.responseText);t(e)}else o(a.responseText)};var c=JSON.stringify(r);a.send(c)}(e,s,n,(function(e){t.postMessage({id:"OP_RESPONSE",message:e.state},n),i(e.nextcall||2e4)}),(function(e){console.log(e),t.postMessage({id:"OP_RESPONSE",message:"error"},n)}))}),r)}(2e4)}}else console.error("[OP IFrame] message origin ("+a+") is not same as parent origin ("+g+")")}}),!1)}()}},[[0,1]]]);