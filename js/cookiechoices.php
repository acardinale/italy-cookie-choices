function allowCookie(){var a,b=document.getElementsByClassName("el"),c=new RegExp("<script.*?/script>");for(a=0;a<b.length;a++){var d=c.test(jsArr[a]);if(d){var e=/<script.*?src="(.*?)"/,f=e.exec(jsArr[a])[1];loadJS(f)}else{b[a].removeChild(b[a].childNodes[0]);var g=b[a].innerHTML;d=g.replace(/<cookie>/g,jsArr[a]),b[a].innerHTML=d}var h=new Date;h.setFullYear(h.getFullYear()+1),document.cookie=cookieName+"="+coVA+"; expires="+h.toGMTString()+";path=/"}}function loadJS(a){var b=document.createElement("script");b.type="application/javascript",b.src=a,document.body.appendChild(b)}!function(a){if(a.cookieChoices)return a.cookieChoices;var b=a.document,c=b.documentElement,d="textContent"in b.body,e=function(){function a(a,d,e,f){htmlM&&(c.className+=" icc");var j="position:"+elPos+";width:100%;background-color:"+bgB+";margin:0; left:0; top:0;padding:4px;z-index:9999;text-align:center;",k=b.createElement("div");return k.id=r,k.style.cssText=j,k.appendChild(g(a)),e&&f&&k.appendChild(i(e,f)),k.appendChild(h(d)),k}function e(a,c,d,e){var f="position:fixed;width:100%;height:100%;z-index:999;top:0;left:0;opacity:0.5;filter:alpha(opacity=50);background-color:#ccc;",j="z-index:9999;position:fixed;left:50%;top:50%;bottom:0%;",k="position:relative;left:-50%;margin-top:-25%;background-color:"+bgB+";padding:20px;box-shadow:4px 4px 25px #888;",l=b.createElement("div");l.id=r;var m=b.createElement("div");m.style.cssText=f;var n=b.createElement("div");n.style.cssText=k;var o=b.createElement("div");o.style.cssText=j;var p=h(c);return p.style.display="block",p.style.textAlign="right",p.style.marginTop="8px",n.appendChild(g(a)),d&&e&&n.appendChild(i(d,e)),n.appendChild(p),o.appendChild(n),l.appendChild(m),l.appendChild(o),l}function f(a,b){d?a.textContent=b:a.innerText=b}function g(a){var c=b.createElement("span");return f(c,a),c}function h(a){var c=b.createElement("a");return f(c,a),c.id=s,c.className=closeClass,c.href="#",c.style.marginLeft="24px",c}function i(a,c){var d=b.createElement("a");return f(d,a),d.className=infoClass,d.href=c,tar&&(d.target="_blank"),d.style.marginLeft="8px",d}function j(){return htmlM&&c.classList.remove("icc"),o(),n(),rel&&b.location.reload(),!1}function k(c,d,f,g,h){if(p()){n();var i=h?e(c,d,f,g):a(c,d,f,g),k=b.createDocumentFragment();k.appendChild(i),b.body.appendChild(k.cloneNode(!0)),b.getElementById(s).onclick=j,scroll&&(b.onscroll=j)}}function l(a,b,c,d){k(a,b,c,d,!1)}function m(a,b,c,d){k(a,b,c,d,!0)}function n(){var a=b.getElementById(r);null!==a&&a.parentNode.removeChild(a)}function o(){var a=new Date;a.setFullYear(a.getFullYear()+1),b.cookie=q+"="+coVA+"; expires="+a.toGMTString()+";path=/"}function p(){return!b.cookie.match(new RegExp(q+"=([^;]+)"))}var q=coNA,r="cookieChoiceInfo",s="cookieChoiceDismiss",t={};return t.showCookieConsentBar=l,t.showCookieConsentDialog=m,t}();return a.cookieChoices=e,e}(this);