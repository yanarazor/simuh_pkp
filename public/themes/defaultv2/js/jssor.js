<!-- #region Jssor Slider Begin -->
<!-- Generator: Jssor Slider Maker -->
<!-- Source: https://www.jssor.com -->
<!-- This is deep minimized code which works independently. -->
<script type="text/javascript">
(function(g,j,c,f,d,k,i){/*! Jssor */
new(function(){});var e={Xe:function(a){return-c.cos(a*c.PI)/2+.5},Rb:function(a){return a},Ye:function(a){return a*a},nd:function(a){return-a*(a-2)},Ze:function(a){return(a*=2)<1?1/2*a*a:-1/2*(--a*(a-2)-1)},af:function(a){return a*a*a},bf:function(a){return(a-=1)*a*a+1},cf:function(a){return(a*=2)<1?1/2*a*a*a:1/2*((a-=2)*a*a+2)},df:function(a){return a*a*a*a},ef:function(a){return-((a-=1)*a*a*a-1)},ff:function(a){return(a*=2)<1?1/2*a*a*a*a:-1/2*((a-=2)*a*a*a-2)},gf:function(a){return a*a*a*a*a},md:function(a){return(a-=1)*a*a*a*a+1},hf:function(a){return(a*=2)<1?1/2*a*a*a*a*a:1/2*((a-=2)*a*a*a*a+2)},jf:function(a){return 1-c.cos(c.PI/2*a)},kf:function(a){return c.sin(c.PI/2*a)},lf:function(a){return-1/2*(c.cos(c.PI*a)-1)},mf:function(a){return a==0?0:c.pow(2,10*(a-1))},Oe:function(a){return a==1?1:-c.pow(2,-10*a)+1},nf:function(a){return a==0||a==1?a:(a*=2)<1?1/2*c.pow(2,10*(a-1)):1/2*(-c.pow(2,-10*--a)+2)},Ne:function(a){return-(c.sqrt(1-a*a)-1)},Le:function(a){return c.sqrt(1-(a-=1)*a)},oe:function(a){return(a*=2)<1?-1/2*(c.sqrt(1-a*a)-1):1/2*(c.sqrt(1-(a-=2)*a)+1)},pe:function(a){if(!a||a==1)return a;var b=.3,d=.075;return-(c.pow(2,10*(a-=1))*c.sin((a-d)*2*c.PI/b))},qe:function(a){if(!a||a==1)return a;var b=.3,d=.075;return c.pow(2,-10*a)*c.sin((a-d)*2*c.PI/b)+1},re:function(a){if(!a||a==1)return a;var b=.45,d=.1125;return(a*=2)<1?-.5*c.pow(2,10*(a-=1))*c.sin((a-d)*2*c.PI/b):c.pow(2,-10*(a-=1))*c.sin((a-d)*2*c.PI/b)*.5+1},se:function(a){var b=1.70158;return a*a*((b+1)*a-b)},te:function(a){var b=1.70158;return(a-=1)*a*((b+1)*a+b)+1},ue:function(a){var b=1.70158;return(a*=2)<1?1/2*a*a*(((b*=1.525)+1)*a-b):1/2*((a-=2)*a*(((b*=1.525)+1)*a+b)+2)},jd:function(a){return 1-e.tc(1-a)},tc:function(a){return a<1/2.75?7.5625*a*a:a<2/2.75?7.5625*(a-=1.5/2.75)*a+.75:a<2.5/2.75?7.5625*(a-=2.25/2.75)*a+.9375:7.5625*(a-=2.625/2.75)*a+.984375},ve:function(a){return a<1/2?e.jd(a*2)*.5:e.tc(a*2-1)*.5+.5},we:c.ceil,xe:c.floor};var b=new function(){var h=this,zb=/\S+/g,H=1,bb=2,eb=3,db=4,hb=5,I,s=0,l=0,t=0,Z=0,B=0,K=navigator,mb=K.appName,o=K.userAgent,p=parseFloat;function Ib(){if(!I){I={Xf:"ontouchstart"in g||"createTouch"in j};var a;if(K.pointerEnabled||(a=K.msPointerEnabled))I.Ad=a?"msTouchAction":"touchAction"}return I}function w(h){if(!s){s=-1;if(mb=="Microsoft Internet Explorer"&&!!g.attachEvent&&!!g.ActiveXObject){var e=o.indexOf("MSIE");s=H;t=p(o.substring(e+5,o.indexOf(";",e)));/*@cc_on Z=@_jscript_version@*/;l=j.documentMode||t}else if(mb=="Netscape"&&!!g.addEventListener){var d=o.indexOf("Firefox"),b=o.indexOf("Safari"),f=o.indexOf("Chrome"),c=o.indexOf("AppleWebKit");if(d>=0){s=bb;l=p(o.substring(d+8))}else if(b>=0){var i=o.substring(0,b).lastIndexOf("/");s=f>=0?db:eb;l=p(o.substring(i+1,b))}else{var a=/Trident\/.*rv:([0-9]{1,}[\.0-9]{0,})/i.exec(o);if(a){s=H;l=t=p(a[1])}}if(c>=0)B=p(o.substring(c+12))}else{var a=/(opera)(?:.*version|)[ \/]([\w.]+)/i.exec(o);if(a){s=hb;l=p(a[2])}}}return h==s}function q(){return w(H)}function xb(){return q()&&(l<6||j.compatMode=="BackCompat")}function cb(){return w(eb)}function gb(){return w(hb)}function tb(){return cb()&&B>534&&B<535}function L(){w();return B>537||l>42||s==H&&l>=11}function vb(){return q()&&l<9}function ub(a){var b,c;return function(f){if(!b){b=d;var e=a.substr(0,1).toUpperCase()+a.substr(1);n([a].concat(["WebKit","ms","Moz","O","webkit"]),function(g,d){var b=a;if(d)b=g+e;if(f.style[b]!=i)return c=b})}return c}}function sb(b){var a;return function(c){a=a||ub(b)(c)||b;return a}}var M=sb("transform");function lb(a){return{}.toString.call(a)}var ib={};n(["Boolean","Number","String","Function","Array","Date","RegExp","Object"],function(a){ib["[object "+a+"]"]=a.toLowerCase()});function n(b,d){var a,c;if(lb(b)=="[object Array]"){for(a=0;a<b.length;a++)if(c=d(b[a],a,b))return c}else for(a in b)if(c=d(b[a],a,b))return c}function E(a){return a==f?String(a):ib[lb(a)]||"object"}function jb(a){for(var b in a)return d}function C(a){try{return E(a)=="object"&&!a.nodeType&&a!=a.window&&(!a.constructor||{}.hasOwnProperty.call(a.constructor.prototype,"isPrototypeOf"))}catch(b){}}function v(a,b){return{x:a,y:b}}function pb(b,a){setTimeout(b,a||0)}function J(b,d,c){var a=!b||b=="inherit"?"":b;n(d,function(c){var b=c.exec(a);if(b){var d=a.substr(0,b.index),e=a.substr(b.index+b[0].length+1,a.length-1);a=d+e}});a=c+(!a.indexOf(" ")?"":" ")+a;return a}function rb(b,a){if(l<9)b.style.filter=a}function Hb(a,b){if(a===i)a=b;return a}h.bg=Ib;h.zd=q;h.Wf=xb;h.Uf=cb;h.Yf=L;ub("transform");h.vd=function(){return l};h.Vc=function(){return t||l};h.ud=pb;h.Rf=function(a,b){b.call(a);return D({},a)};function W(a){a.constructor===W.caller&&a.Kb&&a.Kb.apply(a,W.caller.arguments)}h.Kb=W;h.yb=function(a){if(h.Zf(a))a=j.getElementById(a);return a};function u(a){return a||g.event}h.td=u;h.ic=function(b){b=u(b);var a=b.target||b.srcElement||j;if(a.nodeType==3)a=h.ac(a);return a};h.yd=function(a){a=u(a);return{x:a.pageX||a.clientX||0,y:a.pageY||a.clientY||0}};function x(c,d,a){if(a!==i)c.style[d]=a==i?"":a;else{var b=c.currentStyle||c.style;a=b[d];if(a==""&&g.getComputedStyle){b=c.ownerDocument.defaultView.getComputedStyle(c,f);b&&(a=b.getPropertyValue(d)||b[d])}return a}}function Y(b,c,a,d){if(a===i){a=p(x(b,c));isNaN(a)&&(a=f);return a}if(a==f)a="";else d&&(a+="px");x(b,c,a)}function m(c,a){var d=a?Y:x,b;if(a&4)b=sb(c);return function(e,f){return d(e,b?b(e):c,f,a&2)}}function Cb(b){if(q()&&t<9){var a=/opacity=([^)]*)/.exec(b.style.filter||"");return a?p(a[1])/100:1}else return p(b.style.opacity||"1")}function Eb(b,a,f){if(q()&&t<9){var h=b.style.filter||"",i=new RegExp(/[\s]*alpha\([^\)]*\)/g),e=c.round(100*a),d="";if(e<100||f)d="alpha(opacity="+e+") ";var g=J(h,[i],d);rb(b,g)}else b.style.opacity=a==1?"":c.round(a*100)/100}var N={L:["rotate"],W:["rotateX"],ab:["rotateY"],Mb:["skewX"],Lb:["skewY"]};if(!L())N=D(N,{A:["scaleX",2],B:["scaleY",2],bb:["translateZ",1]});function O(d,a){var c="";if(a){if(q()&&l&&l<10){delete a.W;delete a.ab;delete a.bb}b.a(a,function(d,b){var a=N[b];if(a){var e=a[1]||0;if(P[b]!=d)c+=" "+a[0]+"("+d+(["deg","px",""])[e]+")"}});if(L()){if(a.ib||a.gb||a.bb!=i)c+=" translate3d("+(a.ib||0)+"px,"+(a.gb||0)+"px,"+(a.bb||0)+"px)";if(a.A==i)a.A=1;if(a.B==i)a.B=1;if(a.A!=1||a.B!=1)c+=" scale3d("+a.A+", "+a.B+", 1)"}}d.style[M(d)]=c}h.rf=m("transformOrigin",4);h.sf=m("backfaceVisibility",4);h.tf=m("transformStyle",4);h.uf=m("perspective",6);h.Qf=m("perspectiveOrigin",4);h.wf=function(a,b){if(q()&&t<9||t<10&&xb())a.style.zoom=b==1?"":b;else{var c=M(a),f="scale("+b+")",e=a.style[c],g=new RegExp(/[\s]*scale\(.*?\)/g),d=J(e,[g],f);a.style[c]=d}};h.c=function(a,d,b,c){a=h.yb(a);if(a.addEventListener){d=="mousewheel"&&a.addEventListener("DOMMouseScroll",b,c);a.addEventListener(d,b,c)}else if(a.attachEvent){a.attachEvent("on"+d,b);c&&a.setCapture&&a.setCapture()}};h.K=function(a,c,d,b){a=h.yb(a);if(a.removeEventListener){c=="mousewheel"&&a.removeEventListener("DOMMouseScroll",d,b);a.removeEventListener(c,d,b)}else if(a.detachEvent){a.detachEvent("on"+c,d);b&&a.releaseCapture&&a.releaseCapture()}};h.Eb=function(a){a=u(a);a.preventDefault&&a.preventDefault();a.cancel=d;a.returnValue=k};h.zf=function(a){a=u(a);a.stopPropagation&&a.stopPropagation();a.cancelBubble=d};h.J=function(d,c){var a=[].slice.call(arguments,2),b=function(){var b=a.concat([].slice.call(arguments,0));return c.apply(d,b)};return b};h.Af=function(a,b){if(b==i)return a.textContent||a.innerText;var c=j.createTextNode(b);h.Zb(a);a.appendChild(c)};h.nb=function(d,c){for(var b=[],a=d.firstChild;a;a=a.nextSibling)(c||a.nodeType==1)&&b.push(a);return b};function kb(a,c,e,b){b=b||"u";for(a=a?a.firstChild:f;a;a=a.nextSibling)if(a.nodeType==1){if(U(a,b)==c)return a;if(!e){var d=kb(a,c,e,b);if(d)return d}}}h.Bc=kb;function T(a,d,g,b){b=b||"u";var c=[];for(a=a?a.firstChild:f;a;a=a.nextSibling)if(a.nodeType==1){U(a,b)==d&&c.push(a);if(!g){var e=T(a,d,g,b);if(e.length)c=c.concat(e)}}return c}function fb(a,c,d){for(a=a?a.firstChild:f;a;a=a.nextSibling)if(a.nodeType==1){if(a.tagName==c)return a;if(!d){var b=fb(a,c,d);if(b)return b}}}h.Ff=fb;h.Gf=function(b,a){return b.getElementsByTagName(a)};h.pb=function(a,f,d){d=d||"u";var e;do{if(a.nodeType==1){var c=b.k(a,d);if(c&&c==Hb(f,c)){e=a;break}}a=b.ac(a)}while(a&&a!=j.body);return e};function D(){var e=arguments,d,c,b,a,g=1&e[0],f=1+g;d=e[f-1]||{};for(;f<e.length;f++)if(c=e[f])for(b in c){a=c[b];if(a!==i){a=c[b];var h=d[b];d[b]=g&&(C(h)||C(a))?D(g,{},h,a):a}}return d}h.I=D;function X(f,g){var d={},c,a,b;for(c in f){a=f[c];b=g[c];if(a!==b){var e;if(C(a)&&C(b)){a=X(a,b);e=!jb(a)}!e&&(d[c]=a)}}return d}h.Jc=function(a){return E(a)=="function"};h.Zf=function(a){return E(a)=="string"};h.uc=function(a){return!isNaN(p(a))&&isFinite(a)};h.a=n;h.Ve=C;function R(a){return j.createElement(a)}h.sc=function(){return R("DIV")};h.Hf=function(){return R("SPAN")};h.Lc=function(){};function y(b,c,a){if(a==i)return b.getAttribute(c);b.setAttribute(c,a)}function U(a,b){return y(a,b)||y(a,"data-"+b)}h.z=y;h.k=U;h.Nb=function(d,b,c){var a=h.sd(y(d,b));if(isNaN(a))a=c;return a};function z(b,a){return y(b,"class",a)||""}function ob(b){var a={};n(b,function(b){if(b!=i)a[b]=b});return a}function qb(b,a){return b.match(a||zb)}function Q(b,a){return ob(qb(b||"",a))}h.If=ob;h.Jf=qb;function ab(b,c){var a="";n(c,function(c){a&&(a+=b);a+=c});return a}function F(a,c,b){z(a,ab(" ",D(X(Q(z(a)),Q(c)),Q(b))))}h.ac=function(a){return a.parentNode};h.R=function(a){h.mb(a,"none")};h.P=function(a,b){h.mb(a,b?"none":"")};h.Kf=function(b,a){b.removeAttribute(a)};h.Lf=function(){return q()&&l<10};h.Mf=function(d,a){if(a)d.style.clip="rect("+c.round(a.i||a.q||0)+"px "+c.round(a.m)+"px "+c.round(a.l)+"px "+c.round(a.g||a.u||0)+"px)";else if(a!==i){var g=d.style.cssText,f=[new RegExp(/[\s]*clip: rect\(.*?\)[;]?/i),new RegExp(/[\s]*cliptop: .*?[;]?/i),new RegExp(/[\s]*clipright: .*?[;]?/i),new RegExp(/[\s]*clipbottom: .*?[;]?/i),new RegExp(/[\s]*clipleft: .*?[;]?/i)],e=J(g,f,"");b.Mc(d,e)}};h.Y=function(){return+new Date};h.X=function(b,a){b.appendChild(a)};h.Ab=function(b,a,c){(c||a.parentNode).insertBefore(b,a)};h.wc=function(b,a){a=a||b.parentNode;a&&a.removeChild(b)};h.Ce=function(a,b){n(a,function(a){h.wc(a,b)})};h.Zb=function(a){h.Ce(h.nb(a,d),a)};h.Sc=function(a,b){var c=h.ac(a);b&1&&h.E(a,(h.n(c)-h.n(a))/2);b&2&&h.D(a,(h.p(c)-h.p(a))/2)};var S={i:f,m:f,l:f,g:f,F:f,G:f};h.Wd=function(a){var b=h.sc();r(b,{Xd:"block",lb:h.O(a),i:0,g:0,F:0,G:0});var d=h.Qc(a,S);h.Ab(b,a);h.X(b,a);var e=h.Qc(a,S),c={};n(d,function(b,a){if(b==e[a])c[a]=b});r(b,S);r(b,c);r(a,{i:0,g:0});return c};h.Dc=function(b,a){return parseInt(b,a||10)};h.sd=p;function V(d,c,b){var a=d.cloneNode(!c);!b&&h.Kf(a,"id");return a}h.xb=V;h.rb=function(e,f){var a=new Image;function b(e,d){h.K(a,"load",b);h.K(a,"abort",c);h.K(a,"error",c);f&&f(a,d)}function c(a){b(a,d)}if(gb()&&l<11.6||!e)b(!e);else{h.c(a,"load",b);h.c(a,"abort",c);h.c(a,"error",c);a.src=e}};h.he=function(d,a,e){var c=d.length+1;function b(b){c--;if(a&&b&&b.src==a.src)a=b;!c&&e&&e(a)}n(d,function(a){h.rb(a.src,b)});b()};h.je=function(a,g,i,h){if(h)a=V(a);var c=T(a,g);if(!c.length)c=b.Gf(a,g);for(var f=c.length-1;f>-1;f--){var d=c[f],e=V(i);z(e,z(d));b.Mc(e,d.style.cssText);b.Ab(e,d);b.wc(d)}return a};function Fb(a){var l=this,p="",r=["av","pv","ds","dn"],d=[],q,k=0,f=0,e=0;function g(){F(a,q,(d[e||f&2||f]||"")+" "+(d[k]||""));b.kb(a,"pointer-events",e?"none":"")}function c(){k=0;g();h.K(j,"mouseup",c);h.K(j,"touchend",c);h.K(j,"touchcancel",c)}function o(a){if(e)h.Eb(a);else{k=4;g();h.c(j,"mouseup",c);h.c(j,"touchend",c);h.c(j,"touchcancel",c)}}l.ie=function(a){if(a===i)return f;f=a&2||a&1;g()};l.Hb=function(a){if(a===i)return!e;e=a?0:3;g()};l.M=a=h.yb(a);y(a,"data-jssor-button","1");var m=b.Jf(z(a));if(m)p=m.shift();n(r,function(a){d.push(p+a)});q=ab(" ",d);d.unshift("");h.c(a,"mousedown",o);h.c(a,"touchstart",o)}h.Fc=function(a){return new Fb(a)};h.kb=x;h.Yb=m("overflow");h.D=m("top",2);h.ke=m("right",2);h.Kd=m("bottom",2);h.E=m("left",2);h.n=m("width",2);h.p=m("height",2);h.Sd=m("marginLeft",2);h.le=m("marginTop",2);h.O=m("position");h.mb=m("display");h.s=m("zIndex",1);h.oc=function(b,a,c){if(a!=i)Eb(b,a,c);else return Cb(b)};h.Mc=function(a,b){if(b!=i)a.style.cssText=b;else return a.style.cssText};h.fe=function(b,a){if(a===i){a=x(b,"backgroundImage")||"";var c=/\burl\s*\(\s*["']?([^"'\r\n,]+)["']?\s*\)/gi.exec(a)||[];return c[1]}x(b,"backgroundImage",a?"url('"+a+"')":"")};var G;h.Td=G={qb:h.oc,i:h.D,m:h.ke,l:h.Kd,g:h.E,F:h.n,G:h.p,lb:h.O,Xd:h.mb,sb:h.s};h.Qc=function(c,b){var a={};n(b,function(d,b){if(G[b])a[b]=G[b](c)});return a};function r(g,l){var e=vb(),b=L(),d=tb(),j=M(g);function k(b,d,a){var e=b.eb(v(-d/2,-a/2)),f=b.eb(v(d/2,-a/2)),g=b.eb(v(d/2,a/2)),h=b.eb(v(-d/2,a/2));b.eb(v(300,300));return v(c.min(e.x,f.x,g.x,h.x)+d/2,c.min(e.y,f.y,g.y,h.y)+a/2)}function a(d,a){a=a||{};var n=a.bb||0,p=(a.W||0)%360,q=(a.ab||0)%360,u=(a.L||0)%360,l=a.A,m=a.B,f=a.ig;if(l==i)l=1;if(m==i)m=1;if(f==i)f=1;if(e){n=0;p=0;q=0;f=0}var c=new Bb(a.ib,a.gb,n);c.W(p);c.ab(q);c.Md(u);c.me(a.Mb,a.Lb);c.ob(l,m,f);if(b){c.tb(a.u,a.q);d.style[j]=c.ae()}else if(!Z||Z<9){var o="",g={x:0,y:0};if(a.S)g=k(c,a.S,a.hb);h.le(d,g.y);h.Sd(d,g.x);o=c.de();var s=d.style.filter,t=new RegExp(/[\s]*progid:DXImageTransform\.Microsoft\.Matrix\([^\)]*\)/g),r=J(s,[t],o);rb(d,r)}}r=function(e,c){c=c||{};var j=c.u,k=c.q,g;n(G,function(a,b){g=c[b];g!==i&&a(e,g)});h.Mf(e,c.f);if(!b){j!=i&&h.E(e,(c.wd||0)+j);k!=i&&h.D(e,(c.Bd||0)+k)}if(c.ee)if(d)pb(h.J(f,O,e,c));else a(e,c)};h.Ib=O;if(d)h.Ib=r;if(e)h.Ib=a;else if(!b)a=O;h.H=r;r(g,l)}h.Ib=r;h.H=r;function Bb(j,k,o){var d=this,b=[1,0,0,0,0,1,0,0,0,0,1,0,j||0,k||0,o||0,1],i=c.sin,h=c.cos,l=c.tan;function g(a){return a*c.PI/180}function n(a,b){return{x:a,y:b}}function m(c,e,l,m,o,r,t,u,w,z,A,C,E,b,f,k,a,g,i,n,p,q,s,v,x,y,B,D,F,d,h,j){return[c*a+e*p+l*x+m*F,c*g+e*q+l*y+m*d,c*i+e*s+l*B+m*h,c*n+e*v+l*D+m*j,o*a+r*p+t*x+u*F,o*g+r*q+t*y+u*d,o*i+r*s+t*B+u*h,o*n+r*v+t*D+u*j,w*a+z*p+A*x+C*F,w*g+z*q+A*y+C*d,w*i+z*s+A*B+C*h,w*n+z*v+A*D+C*j,E*a+b*p+f*x+k*F,E*g+b*q+f*y+k*d,E*i+b*s+f*B+k*h,E*n+b*v+f*D+k*j]}function e(c,a){return m.apply(f,(a||b).concat(c))}d.ob=function(a,c,d){if(a!=1||c!=1||d!=1)b=e([a,0,0,0,0,c,0,0,0,0,d,0,0,0,0,1])};d.tb=function(a,c,d){b[12]+=a||0;b[13]+=c||0;b[14]+=d||0};d.W=function(c){if(c){a=g(c);var d=h(a),f=i(a);b=e([1,0,0,0,0,d,f,0,0,-f,d,0,0,0,0,1])}};d.ab=function(c){if(c){a=g(c);var d=h(a),f=i(a);b=e([d,0,-f,0,0,1,0,0,f,0,d,0,0,0,0,1])}};d.Md=function(c){if(c){a=g(c);var d=h(a),f=i(a);b=e([d,f,0,0,-f,d,0,0,0,0,1,0,0,0,0,1])}};d.me=function(a,c){if(a||c){j=g(a);k=g(c);b=e([1,l(k),0,0,l(j),1,0,0,0,0,1,0,0,0,0,1])}};d.eb=function(c){var a=e(b,[1,0,0,0,0,1,0,0,0,0,1,0,c.x,c.y,0,1]);return n(a[12],a[13])};d.ae=function(){return"matrix3d("+b.join(",")+")"};d.de=function(){return"progid:DXImageTransform.Microsoft.Matrix(M11="+b[0]+", M12="+b[4]+", M21="+b[1]+", M22="+b[5]+", SizingMethod='auto expand')"}}new function(){var a=this;function b(d,g){for(var j=d[0].length,i=d.length,h=g[0].length,f=[],c=0;c<i;c++)for(var k=f[c]=[],b=0;b<h;b++){for(var e=0,a=0;a<j;a++)e+=d[c][a]*g[a][b];k[b]=e}return f}a.A=function(b,c){return a.Dd(b,c,0)};a.B=function(b,c){return a.Dd(b,0,c)};a.Dd=function(a,c,d){return b(a,[[c,0],[0,d]])};a.eb=function(d,c){var a=b(d,[[c.x],[c.y]]);return v(a[0][0],a[1][0])}};var P={wd:0,Bd:0,u:0,q:0,vb:1,A:1,B:1,L:0,W:0,ab:0,ib:0,gb:0,bb:0,Mb:0,Lb:0};h.Ed=function(c,d){var a=c||{};if(c)if(b.Jc(c))a={T:a};else if(b.Jc(c.f))a.f={T:c.f};a.T=a.T||d;if(a.f)a.f.T=a.f.T||d;return a};function nb(c,a){var b={};n(c,function(c,d){var e=c;if(a[d]!=i)if(h.uc(c))e=c+a[d];else e=nb(c,a[d]);b[d]=e});return b}h.Zd=nb;h.Vd=function(n,j,s,t,B,C,o){var a=j;if(n){a={};for(var h in j){var D=C[h]||1,z=B[h]||[0,1],g=(s-z[0])/z[1];g=c.min(c.max(g,0),1);g=g*D;var x=c.floor(g);if(g!=x)g-=x;var k=t.T||e.Rb,m,E=n[h],p=j[h];if(b.uc(p)){k=t[h]||k;var A=k(g);m=E+p*A}else{m=b.I({Gb:{}},n[h]);var y=t[h]||{};b.a(p.Gb||p,function(d,a){k=y[a]||y.T||k;var c=k(g),b=d*c;m.Gb[a]=b;m[a]+=b})}a[h]=m}var w=b.a(j,function(b,a){return P[a]!=i});w&&b.a(P,function(c,b){if(a[b]==i&&n[b]!==i)a[b]=n[b]});if(w){if(a.vb)a.A=a.B=a.vb;a.S=o.S;a.hb=o.hb;if(q()&&l>=11&&(j.u||j.q)&&s!=0&&s!=1)a.L=a.L||1e-8;a.ee=d}}if(j.f&&o.tb){var r=a.f.Gb,v=(r.i||0)+(r.l||0),u=(r.g||0)+(r.m||0);a.g=(a.g||0)+u;a.i=(a.i||0)+v;a.f.g-=u;a.f.m-=u;a.f.i-=v;a.f.l-=v}if(a.f&&b.Lf()&&!a.f.i&&!a.f.g&&!a.f.q&&!a.f.u&&a.f.m==o.S&&a.f.l==o.hb)a.f=f;return a}};function o(){var a=this,d=[];function i(a,b){d.push({fc:a,vc:b})}function h(a,c){b.a(d,function(b,e){b.fc==a&&b.vc===c&&d.splice(e,1)})}a.Db=a.addEventListener=i;a.removeEventListener=h;a.j=function(a){var c=[].slice.call(arguments,1);b.a(d,function(b){b.fc==a&&b.vc.apply(g,c)})}}var l=function(A,E,h,J,M,L){A=A||0;var a=this,p,m,n,s,C=0,G,H,F,D,z=0,i=0,l=0,y,j,e,f,o,x,u=[],w;function O(a){e+=a;f+=a;j+=a;i+=a;l+=a;z+=a}function r(p){var g=p;if(o)if(!x&&(g>=f||g<e)||x&&g>=e)g=((g-e)%o+o)%o+e;if(!y||s||i!=g){var k=c.min(g,f);k=c.max(k,e);if(!y||s||k!=l){if(L){var m=(k-j)/(E||1);if(h.ge)m=1-m;var n=b.Vd(M,L,m,G,F,H,h);if(w)b.a(n,function(b,a){w[a]&&w[a](J,b)});else b.H(J,n)}a.xc(l-j,k-j);var r=l,q=l=k;b.a(u,function(b,c){var a=!y&&x||g<=i?u[u.length-c-1]:b;a.v(l-z)});i=g;y=d;a.Qb(r,q)}}}function B(a,b,d){b&&a.Pb(f);if(!d){e=c.min(e,a.Tb()+z);f=c.max(f,a.fb()+z)}u.push(a)}var v=g.requestAnimationFrame||g.webkitRequestAnimationFrame||g.mozRequestAnimationFrame||g.msRequestAnimationFrame;if(b.Uf()&&b.vd()<7||!v)v=function(a){b.ud(a,h.Wc)};function I(){if(p){var d=b.Y(),e=c.min(d-C,h.bd),a=i+e*n;C=d;if(a*n>=m*n)a=m;r(a);if(!s&&a*n>=m*n)K(D);else v(I)}}function q(g,h,j){if(!p){p=d;s=j;D=h;g=c.max(g,e);g=c.min(g,f);m=g;n=m<i?-1:1;a.cd();C=b.Y();v(I)}}function K(b){if(p){s=p=D=k;a.dd();b&&b()}}a.ed=function(a,b,c){q(a?i+a:f,b,c)};a.fd=q;a.jb=K;a.ce=function(a){q(a)};a.Q=function(){return i};a.id=function(){return m};a.Cb=function(){return l};a.v=r;a.be=function(){r(f,d)};a.tb=function(a){r(i+a)};a.kd=function(){return p};a.Yd=function(a){o=a};a.Pb=O;a.C=function(a,b){B(a,0,b)};a.dc=function(a){B(a,1)};a.ld=function(a){f+=a};a.Tb=function(){return e};a.fb=function(){return f};a.Qb=a.cd=a.dd=a.xc=b.Lc;a.jc=b.Y();h=b.I({Wc:16,bd:50},h);o=h.kc;x=h.Ud;w=h.Hd;e=j=A;f=A+E;H=h.Id||{};F=h.Jd||{};G=b.Ed(h.Z)};var m={Sb:"data-scale",mc:"data-scale-ratio",wb:"data-autocenter"},n=new function(){var a=this;a.db=function(c,a,e,d){(d||!b.z(c,a))&&b.z(c,a,e)};a.pc=function(a){var c=b.Nb(a,m.wb);b.Sc(a,c)}};new(function(){});var p={Cc:1},s=function(a,E){var g=this;o.call(g);a=b.yb(a);var u,C,B,t,l=0,e,q,j,y,z,i,h,s,r,D=[],A=[];function x(a){a!=-1&&A[a].ie(a==l)}function v(a){g.j(p.Cc,a*q)}g.M=a;g.qc=function(a){if(a!=t){var d=l,b=c.floor(a/q);l=b;t=a;x(d);x(b)}};g.bc=function(c){b.P(a,c)};var w;g.ec=function(x){if(!w){u=c.ceil(x/q);l=0;var n=s+y,o=r+z,m=c.ceil(u/j)-1;C=s+n*(!i?m:j-1);B=r+o*(i?m:j-1);b.n(a,C);b.p(a,B);for(var g=0;g<u;g++){var t=b.Hf();b.Af(t,g+1);var k=b.je(h,"numbertemplate",t,d);b.O(k,"absolute");var p=g%(m+1);b.E(k,!i?n*p:g%j*n);b.D(k,i?o*p:c.floor(g/(m+1))*o);b.X(a,k);D[g]=k;e.Wb&1&&b.c(k,"click",b.J(f,v,g));e.Wb&2&&b.c(k,"mouseenter",b.J(f,v,g));A[g]=b.Fc(k)}w=d}};g.Vb=e=b.I({qd:10,hd:10,Zc:1,Wb:1},E);h=b.Bc(a,"prototype");s=b.n(h);r=b.p(h);b.wc(h,a);q=e.Yc||1;j=e.Od||1;y=e.qd;z=e.hd;i=e.Zc-1;e.ob==k&&n.db(a,m.Sb,1);e.V&&n.db(a,m.wb,e.V);n.pc(a)},t=function(a,e,i){var c=this;o.call(c);var t,g,h,j;b.n(a);b.p(a);var r,q;function l(a){c.j(p.Cc,a,d)}function v(c){b.P(a,c);b.P(e,c)}function u(){r.Hb(i.Ub||g>0);q.Hb(i.Ub||g<t-i.ub)}c.qc=function(b,a,c){if(c)g=a;else{g=b;u()}};c.bc=v;var s;c.ec=function(c){t=c;g=0;if(!s){b.c(a,"click",b.J(f,l,-j));b.c(e,"click",b.J(f,l,j));r=b.Fc(a);q=b.Fc(e);s=d}};c.Vb=h=b.I({Yc:1},i);j=h.Yc;if(h.ob==k){n.db(a,m.Sb,1);n.db(e,m.Sb,1)}if(h.V){n.db(a,m.wb,h.V);n.db(e,m.wb,h.V)}n.pc(a);n.pc(e)};function r(e,d,c){var a=this;l.call(a,0,c);a.Gc=b.Lc;a.Oc=0;a.Kc=c}var u=function(v,i,u,E){var a=this,w,o={},p=i.Ec,s=i.cg,j=new l(0,0),q=[],h=[],D=E,g=D?1e8:0;l.call(a,0,0);function r(d,c){var a={};b.a(d,function(d,f){var e=o[f];if(e){if(b.Ve(d))d=r(d,c||f=="e");else if(c)if(b.uc(d))d=w[d];a[e]=d}});return a}function t(d,e){var a=[],c=b.nb(d);b.a(c,function(c){var h=b.k(c,"u")=="caption";if(h){var d=b.k(c,"t"),g=p[b.Dc(d)]||p[d],f={M:c,hc:g};a.push(f)}a=a.concat(t(c,e+1))});return a}function n(c,e){var a=q[c];if(a==f){a=q[c]={U:c,yc:[],Uc:[]};var d=0;!b.a(h,function(a,b){d=b;return a.U>c})&&d++;h.splice(d,0,a)}return a}function z(t,u,h){var a,e;if(s){var o=b.k(t,"c");if(o){var m=s[b.Dc(o)];if(m){a=n(m.r,0);a.Ef=m.e||0}}}b.a(u,function(i){var f=b.I(d,{},r(i)),j=b.Ed(f.Z);delete f.Z;if(f.g){f.u=f.g;j.u=j.g;delete f.g}if(f.i){f.q=f.i;j.q=j.i;delete f.i}var o={Z:j,S:h.F,hb:h.G},k=new l(i.b,i.d,o,t,h,f);g=c.max(g,i.b+i.d);if(a){if(!e)e=new l(i.b,0);e.C(k)}else{var m=n(i.b,i.b+i.d);m.yc.push(k)}h=b.Zd(h,f)});if(a&&e){e.be();var i=e,j,k=e.Tb(),p=e.fb(),q=c.max(p,a.Ef);if(a.U<p){if(a.U>k){i=new l(k,a.U-k);i.C(e,d)}else i=f;j=new l(a.U,q-k,{kc:q-a.U,Ud:d});j.C(e,d)}i&&a.yc.push(i);j&&a.Uc.push(j)}return h}function y(a){b.a(a,function(d){var a=d.M,f=b.n(a),e=b.p(a),c={g:b.E(a),i:b.D(a),u:0,q:0,qb:1,sb:b.s(a)||0,L:0,W:0,ab:0,A:1,B:1,ib:0,gb:0,bb:0,Mb:0,Lb:0,F:f,G:e,f:{i:0,m:f,l:e,g:0}};c.wd=c.g;c.Bd=c.i;z(a,d.hc,c)})}function B(f,e,g){var c=f.b-e;if(c){var b=new l(e,c);b.C(j,d);b.Pb(g);a.C(b)}a.ld(f.d);return c}function A(e){var c=j.Tb(),d=0;b.a(e,function(e,f){e=b.I({d:u},e);B(e,c,d);c=e.b;d+=e.d;if(!f||e.t==2){a.Oc=c;a.Kc=c+e.d}})}function k(h,e,d){var f=e.length;if(f>4)for(var m=c.ceil(f/4),a=0;a<m;a++){var i=e.slice(a*4,c.min(a*4+4,f)),j=new l(i[0].U,0);k(j,i,d);h.C(j)}else b.a(e,function(a){b.a(d?a.Uc:a.yc,function(a){d&&a.ld(g-a.fb());h.C(a)})})}a.Gc=function(){a.v(-1,d)};w=[e.Rb,e.Xe,e.Ye,e.nd,e.Ze,e.af,e.bf,e.cf,e.df,e.ef,e.ff,e.gf,e.md,e.hf,e.jf,e.kf,e.lf,e.mf,e.Oe,e.nf,e.Ne,e.Le,e.oe,e.pe,e.qe,e.re,e.se,e.te,e.ue,e.jd,e.tc,e.ve,e.we,e.xe];var C={i:"y",g:"x",l:"m",m:"t",L:"r",W:"rX",ab:"rY",A:"sX",B:"sY",ib:"tX",gb:"tY",bb:"tZ",Mb:"kX",Lb:"kY",qb:"o",Z:"e",sb:"i",f:"c"};b.a(C,function(b,a){o[b]=a});y(t(v,1));k(j,h);var x=i.gg||[],m=[].concat(x[b.Dc(b.k(v,"b"))]||[]);m.push({b:g,d:m.length?0:u});A(m);g=c.max(g,a.fb());k(a,h,d);a.v(-1)},h=function(){var a=this;b.Rf(a,o);var Sb="data-jssor-slider",Yb="data-jssor-thumb",u,n,db,eb,U,ob,cb,gb,R,P,Ob,nc=1,ic=1,Zb=1,ac={},hc,z,T,Rb,xb,wb,pb,Qb,Pb,bb,s=-1,K,Cb,q,I,H,Lb,lb,mb,nb,t,Q,x,N,Nb,X=[],ec,fc,bc,oc,Ec,v,fb,F,dc,kb,Ab,Db,jb,Eb,J,hb,O,G=1,S,D,W,Fb=0,Gb=0,M,qb,ib,sb,y,Z,A,tb,Y=[],ub=b.bg(),Jb=ub.Xf,B=[],C,L,E,zb,Xb,V;function tc(e,n,o){var k=this,h={i:2,m:1,l:2,g:1},l={i:"top",m:"right",l:"bottom",g:"left"},g,a,f,i,j={};k.M=e;k.Jb=function(q,k){var p,s=q,r=k;if(!f){f=b.Wd(e);g=e.parentNode;i={ob:b.Nb(e,m.Sb,1),V:b.Nb(e,m.wb)};b.a(l,function(c,a){j[a]=b.Nb(e,"data-scale-"+c,1)});a=e;if(n){a=b.xb(g,d);b.H(a,{i:0,g:0});b.X(a,e);b.X(g,a)}}if(o)p=q>k?q:k;else s=r=p=c.pow(R<P?k:q,i.ob);b.wf(a,p);b.z(a,m.mc,p);b.n(g,f.F*s);b.p(g,f.G*r);var t=b.zd()&&b.Vc()<9||b.Vc()<10&&b.Wf()?p:1,u=(s-t)*f.F/2,v=(r-t)*f.G/2;b.E(a,u);b.D(a,v);b.a(f,function(d,a){if(h[a]&&d){var e=(h[a]&1)*c.pow(q,j[a])*d+(h[a]&2)*c.pow(k,j[a])*d/2;b.Td[a](g,e)}});b.Sc(g,i.V)}}function Dc(){var b=this;l.call(b,-1e8,2e8);b.Of=function(){var a=b.Cb(),d=c.floor(a),f=w(d),e=a-c.floor(a);return{cb:f,Df:d,lb:e}};b.Qb=function(e,b){var f=c.floor(b);if(f!=b&&b>e)f++;gc(f,d);a.j(h.Bf,w(b),w(e),b,e)}}function Cc(){var a=this;l.call(a,0,0,{kc:q});b.a(B,function(b){J&1&&b.Yd(q);a.dc(b);b.Pb(jb/nb)})}function Bc(){var a=this,b=tb.M;l.call(a,-1,2,{Z:e.Rb,Hd:{lb:mc},kc:q},b,{lb:1},{lb:-2});a.lc=b}function uc(o,m){var b=this,e,g,i,j,c;l.call(b,-1e8,2e8,{bd:100});b.cd=function(){S=d;W=f;a.j(h.yf,w(y.Q()),y.Q())};b.dd=function(){S=k;j=k;var b=y.Of();a.j(h.xf,w(y.Q()),y.Q());!b.lb&&Fc(b.Df,s)};b.Qb=function(f,d){var a;if(j)a=c;else{a=g;if(i){var b=d/i;a=n.nc(b)*(g-e)+e}}y.v(a)};b.Fb=function(a,d,c,f){e=a;g=d;i=c;y.v(a);b.v(0);b.fd(c,f)};b.Cf=function(a){j=d;c=a;b.ed(a,f,d)};b.Pf=function(a){c=a};y=new Dc;y.C(o);y.C(m)}function vc(){var c=this,a=kc();b.s(a,0);b.kb(a,"pointerEvents","none");c.M=a;c.Ob=function(){b.R(a);b.Zb(a)}}function Ac(m,g){var e=this,r,M,u,j,z=[],y,D,S,J,Q,F,K,i,x,p;l.call(e,-t,t+1,{});function E(a){r&&r.Gc();R(m,a,0);F=d;r=new U.N(m,U,b.sd(b.k(m,"idle"))||dc,!v);r.v(0)}function Y(){r.jc<U.jc&&E()}function N(p,r,o){if(!J){J=d;if(j&&o){var f=o.width,c=o.height,m=f,l=c;if(f&&c&&n.zb){if(n.zb&3&&(!(n.zb&4)||f>I||c>H)){var i=k,q=I/H*c/f;if(n.zb&1)i=q>1;else if(n.zb&2)i=q<1;m=i?f*H/c:I;l=i?H:c*I/f}b.n(j,m);b.p(j,l);b.D(j,(H-l)/2);b.E(j,(I-m)/2)}b.O(j,"absolute");a.j(h.Sf,g)}}b.R(r);p&&p(e)}function X(f,b,c,d){if(d==W&&s==g&&v)if(!Ec){var a=w(f);C.Qd(a,g,b,e,c);b.Tf();Z.Pb(a-Z.Tb()-1);Z.v(a);A.Fb(a,a,0)}}function cb(b){if(b==W&&s==g){if(!i){var a=f;if(C)if(C.cb==g)a=C.Nd();else C.Ob();Y();i=new zc(m,g,a,r);i.xd(p)}!i.kd()&&i.zc()}}function G(a,d,k){if(a==g){if(a!=d)B[d]&&B[d].Cd();else!k&&i&&i.Vf();p&&p.Hb();var l=W=b.Y();e.rb(b.J(f,cb,l))}else{var j=c.min(g,a),h=c.max(g,a),o=c.min(h-j,j+q-h),m=t+n.ag-1;(!Q||o<=m)&&e.rb()}}function db(){if(s==g&&i){i.jb();p&&p.qf();p&&p.vf();i.Fd()}}function eb(){s==g&&i&&i.jb()}function ab(b){!O&&a.j(h.of,g,b)}function P(){p=x.pInstance;i&&i.xd(p)}e.rb=function(e,c){c=c||u;if(z.length&&!J){b.P(c);if(!S){S=d;a.j(h.Me,g);b.a(z,function(a){if(!b.z(a,"src")){a.src=b.k(a,"src2")||"";b.mb(a,a["display-origin"])}})}b.he(z,j,b.J(f,N,e,c))}else N(e,c)};e.Ke=function(){if(q==1){e.Cd();G(g,g)}else if(C){var a=C.Pd(q);if(a){var h=W=b.Y(),c=g+fb,d=B[w(c)];return d.rb(b.J(f,X,c,d,a,h),u)}}else Mb(fb)};e.Ac=function(){G(g,g,d)};e.Cd=function(){p&&p.qf();p&&p.vf();e.rd();i&&i.Je();i=f;E()};e.Tf=function(){b.R(m)};e.rd=function(){b.P(m)};e.Ie=function(){p&&p.Hb()};function R(a,f,c,h){if(b.z(a,Sb))return;if(!F){if(a.tagName=="IMG"){z.push(a);if(!b.z(a,"src")){Q=d;a["display-origin"]=b.mb(a);b.R(a)}}var e=b.fe(a);if(e){var g=new Image;b.k(g,"src2",e);z.push(g)}c&&b.s(a,(b.s(a)||0)+1)}var i=b.nb(a);b.a(i,function(a){var e=a.tagName,g=b.k(a,"u");if(g=="player"&&!x){x=a;if(x.pInstance)P();else b.c(x,"dataavailable",P)}if(g=="caption"){if(f){b.rf(a,b.k(a,"to"));b.sf(a,b.k(a,"bf"));K&&b.k(a,"3d")&&b.tf(a,"preserve-3d")}}else if(!F&&!c&&!j){if(e=="A"){if(b.k(a,"u")=="image")j=b.Ff(a,"IMG");else j=b.Bc(a,"image",d);if(j){y=a;b.mb(y,"block");b.H(y,bb);D=b.xb(y,d);b.O(y,"relative");b.oc(D,0);b.kb(D,"backgroundColor","#000")}}else if(e=="IMG"&&b.k(a,"u")=="image")j=a;if(j){j.border=0;b.H(j,bb)}}R(a,f,c+1,h)})}e.xc=function(c,b){var a=t-b;mc(M,a)};e.cb=g;o.call(e);K=b.k(m,"p");b.uf(m,K);b.Qf(m,b.k(m,"po"));var L=b.Bc(m,"thumb",d);if(L){b.xb(L);b.R(L)}b.P(m);u=b.xb(T);b.s(u,1e3);b.c(m,"click",ab);E(d);e.Rd=j;e.gd=D;e.lc=M=m;b.X(M,u);a.Db(203,G);a.Db(28,eb);a.Db(24,db)}function zc(z,g,p,q){var c=this,n=0,u=0,i,j,f,e,m,t,r,o=B[g];l.call(c,0,0);function w(){b.Zb(L);oc&&m&&o.gd&&b.X(L,o.gd);b.P(L,!m&&o.Rd)}function x(){c.zc()}function y(a){r=a;c.jb();c.zc()}c.zc=function(){var b=c.Cb();if(!D&&!S&&!r&&s==g){if(!b){if(i&&!m){m=d;c.Fd(d);a.j(h.He,g,n,u,i,e)}w()}var k,p=h.Xc;if(b!=e)if(b==f)k=e;else if(b==j)k=f;else if(!b)k=j;else k=c.id();a.j(p,g,b,n,j,f,e);var l=v&&(!F||G);if(b==e)(f!=e&&!(F&12)||l)&&o.Ke();else(l||b!=f)&&c.fd(k,x)}};c.Vf=function(){f==e&&f==c.Cb()&&c.v(j)};c.Je=function(){C&&C.cb==g&&C.Ob();var b=c.Cb();b<e&&a.j(h.Xc,g,-b-1,n,j,f,e)};c.Fd=function(a){p&&b.Yb(Q,a&&p.hc.dg?"":"hidden")};c.xc=function(c,b){if(m&&b>=i){m=k;w();o.rd();C.Ob();a.j(h.Ge,g,n,u,i,e)}a.j(h.Fe,g,b,n,j,f,e)};c.xd=function(a){if(a&&!t){t=a;a.Db($JssorPlayer$.Ld,y)}};p&&c.dc(p);i=c.fb();c.dc(q);j=i+q.Oc;e=c.fb();f=v?i+q.Kc:e}function Bb(a,c,d){b.E(a,c);b.D(a,d)}function mc(c,b){var a=x>0?x:db,d=lb*b*(a&1),e=mb*b*(a>>1&1);Bb(c,d,e)}function cc(){zb=S;Xb=A.id();E=y.Q()}function Ub(){cc();if(D||!G&&F&12){A.jb();a.j(h.Ee)}}function Tb(f){if(!D&&(G||!(F&12))&&!A.kd()){var b=y.Q(),a=c.ceil(E);if(f&&c.abs(M)>=n.Rc){a=c.ceil(b);a+=ib}if(!(J&1))a=c.min(q-t,c.max(a,0));var d=c.abs(a-b);if(d<1&&n.nc!=e.Rb)d=1-c.pow(1-d,5);if(!O&&zb)A.ce(Xb);else if(b==a){Cb.Ie();Cb.Ac()}else A.Fb(b,a,d*kb)}}function Wb(a){!b.pb(b.ic(a),"nodrag")&&b.Eb(a)}function xc(a){lc(a,1)}function lc(c,g){c=b.td(c);var e=b.ic(c);Nb=k;var l=b.pb(e,"1",Yb);if((!l||l===u)&&!N&&(!g||c.touches.length==1)&&!b.pb(e,"nodrag")&&yc()){var n=b.pb(e,i,m.mc);if(n)Zb=b.z(n,m.mc);if(g){var p=c.touches[0];Fb=p.clientX;Gb=p.clientY}else{var o=b.yd(c);Fb=o.x;Gb=o.y}D=d;W=f;b.c(j,g?"touchmove":"mousemove",rb);b.Y();O=0;Ub();if(!zb)x=0;M=0;qb=0;ib=0;a.j(h.De,w(E),E,c)}}function rb(a){if(D){a=b.td(a);var e;if(a.type!="mousemove")if(a.touches.length==1){var m=a.touches[0];e={x:m.clientX,y:m.clientY}}else ab();else e=b.yd(a);if(e){var f=e.x-Fb,g=e.y-Gb;if(x||c.abs(f)>1.5||c.abs(g)>1.5){if(c.floor(E)!=E)x=x||db&N;if((f||g)&&!x)if(N==3)if(c.abs(g)>c.abs(f))x=2;else x=1;else{x=N;var n=[0,c.abs(f),c.abs(g)],p=n[x],o=n[~x&3];if(o>p)Nb=d}if(x&&!Nb){var l=g,h=mb;if(x==1){l=f;h=lb}if(M-qb<-1.5)ib=0;else if(M-qb>1.5)ib=-1;qb=M;M=l;V=E-M/h/Zb;if(!(J&1)){var j=0,i=[-E,0,E-q+t];b.a(i,function(b,d){if(b>0){var a=c.pow(b,1/1.6);a=c.tan(a*c.PI/2);j=(a-b)*(d-1)}});var k=j+V;i=[-k,0,k-q+t];b.a(i,function(a,b){if(a>0){a=c.min(a,h);a=c.atan(a)*2/c.PI;a=c.pow(a,1.6);V=a*(b-1);if(b)V+=q-t}})}b.Eb(a);if(!S)A.Cf(V);else A.Pf(V)}}}}}function ab(){wc();if(D){D=k;O=M;b.Y();b.K(j,"mousemove",rb);b.K(j,"touchmove",rb);O&&v&8&&(v=0);A.jb();var c=y.Q();a.j(h.pf,w(c),c,w(E),E);F&12&&cc();Tb(d)}}function sc(c){var a=b.ic(c),d=b.pb(a,"1",Sb);if(u===d)if(O){b.zf(c);while(a&&u!==a){(a.tagName=="A"||b.z(a,"data-jssor-button"))&&b.Eb(c);a=a.parentNode}}else v&4&&(v=0)}function Vb(a){B[s];s=w(a);Cb=B[s];y.v(s);gc(s);return s}function Fc(b,c){x=0;Vb(b);if(v&2&&(fb>0&&s==q-1||fb<0&&!s))v=0;a.j(h.Be,s,c)}function gc(a,c){K=a;b.a(X,function(b){b.qc(w(a),a,c)})}function yc(){var b=h.ad||0,a=hb;if(Jb)a&1&&(a&=1);h.ad|=a;return N=a&~b}function wc(){if(N){h.ad&=~hb;N=0}}function kc(){var a=b.sc();b.H(a,bb);b.O(a,"absolute");return a}function w(b,a){a=a||q||1;return(b%a+a)%a}function yb(c,a,b){v&8&&(v=0);vb(c,kb,a,b)}function Ib(){b.a(X,function(a){a.bc(a.Vb.fg<=G)})}function qc(){if(!G){G=1;Ib();if(!D){F&12&&Tb();F&3&&B[s]&&B[s].Ac()}}a.j(h.Ae)}function pc(){if(G){G=0;Ib();D||!(F&12)||Ub()}a.j(h.ze)}function rc(){b.a(Y,function(a){b.H(a,bb);b.O(a,"absolute");b.Yb(a,"hidden");b.R(a)});b.H(T,bb)}function Mb(b,a){vb(b,a,d)}function vb(g,f,m,o){if(Eb&&(!D&&(G||!(F&12))||n.Pc)){S=d;D=k;A.jb();if(f==i)f=kb;var e=sb.Cb(),b=g;if(m){b=K+g;if(g>0)b=c.ceil(b);else b=c.floor(b)}var a=b;if(!(J&1))if(o)a=w(a);else if(J&2&&(a<0&&!K||a>q-t&&K>=q-t))a=a<0?q-t:0;else a=c.max(0,c.min(a,q-t));var l=(a-e)%q;a=e+l;var h=e==a?0:f*c.abs(l),j=1;if(t>1)j=(db&1?Qb:Pb)/nb;h=c.min(h,f*j*1.5);A.Fb(e,a,h||1)}}a.Bb=function(a){if(a==i)return a;if(a!=v){v=a;v&&B[s]&&B[s].Ac()}};function Kb(){return b.n(hc||u)}function Hb(){return b.p(hc||u)}a.S=Kb;a.hb=Hb;a.ye=function(b){if(b==i)return Ob||R;a.Jb(b,b/R*P)};a.Jb=function(c,a){b.n(u,c);b.p(u,a);nc=c/R;ic=a/P;b.a(ac,function(a){a.Jb(nc,ic)});if(!Ob){b.Ab(Q,z);b.D(Q,0);b.E(Q,0)}Ob=c};a.ed=function(){a.Bb(v||1)};a.Kb=function(o,l){a.M=u=b.yb(o);R=b.n(u);P=b.p(u);n=b.I({zb:0,ag:1,gc:1,Xb:0,Bb:0,Ub:1,cc:d,Pc:d,We:1,od:3e3,Hc:1,rc:500,nc:e.nd,Rc:20,Tc:0,ub:1,pd:0,Ue:1,Ic:1,Nc:1},l);n.cc=n.cc&&b.Yf();if(n.Te!=i)n.od=n.Te;if(n.Se!=i)n.pd=n.Se;db=n.Ic&3;eb=n.eg;U=b.I({N:r},n.Re);ob=n.Qe;cb=n.Pe;gb=n.jg;!n.Ue;var s=b.nb(u);b.a(s,function(a,d){var c=b.k(a,"u");if(c=="loading")T=a;else{if(c=="slides")z=a;if(c=="navigator")Rb=a;if(c=="arrowleft")xb=a;if(c=="arrowright")wb=a;if(c=="thumbnavigator")pb=a;if(a.tagName=="DIV"||a.tagName=="SPAN")ac[c||d]=new tc(a,c=="slides",b.If(["slides","thumbnavigator"])[c])}});T=T||b.sc(j);Qb=b.n(z);Pb=b.p(z);I=n.ne||Qb;H=n.Nf||Pb;bb={F:I,G:H,i:0,g:0};Lb=n.Tc;lb=I+Lb;mb=H+Lb;nb=db&1?lb:mb;fb=n.We;F=n.Hc;dc=n.od;kb=n.rc;tb=new vc;if(n.cc)Bb=function(a,c,d){b.Ib(a,{ib:c,gb:d})};v=n.Bb&63;a.Vb=l;b.z(u,Sb,"1");b.s(z,b.s(z)||0);b.O(z,"absolute");Q=b.xb(z,d);b.Ab(Q,z);Z=new Bc;b.X(Q,Z.lc);b.Yb(z,"hidden");F&=Jb?10:5;var x=b.nb(z);b.a(x,function(a){a.tagName=="DIV"&&!b.k(a,"u")&&Y.push(a);b.s(a,(b.s(a)||0)+1)});L=kc();b.kb(L,"backgroundColor","#000");b.oc(L,0);b.s(L,0);b.Ab(L,z.firstChild,z);q=Y.length;t=c.min(n.ub,q);Eb=t<q;J=Eb?n.Ub:0;if(q){rc();if(eb){oc=eb.hg;Ab=eb.N;Db=t==1&&q>1&&Ab&&(!b.zd()||b.vd()>=9)}jb=Db||t>=q||!(J&1)?0:n.pd;hb=(t>1||jb?db:-1)&n.Nc;ub.Ad&&b.kb(z,ub.Ad,([f,"pan-y","pan-x","none"])[hb]||"");if(Db)C=new Ab(tb,I,H,eb,Jb,Bb);for(var k=0;k<Y.length;k++){var y=Y[k],m=new Ac(y,k);B.push(m)}b.R(T);sb=new Cc;A=new uc(sb,Z);b.c(u,"click",sc,d);b.c(u,"mouseleave",qc);b.c(u,"mouseenter",pc);if(hb){b.c(u,"mousedown",lc);b.c(u,"touchstart",xc);b.c(u,"dragstart",Wb);b.c(u,"selectstart",Wb);b.c(g,"mouseup",ab);b.c(j,"mouseup",ab);b.c(j,"touchend",ab);b.c(j,"touchcancel",ab);b.c(g,"blur",ab)}if(Rb&&ob){ec=new ob.N(Rb,ob,Kb(),Hb());X.push(ec)}if(cb&&xb&&wb){cb.Ub=J;cb.ub=t;fc=new cb.N(xb,wb,cb,Kb(),Hb());X.push(fc)}if(pb&&gb){gb.Xb=n.Xb;bc=new gb.N(pb,gb);b.z(pb,Yb,"1");X.push(bc)}b.a(X,function(a){a.ec(q,B,T);a.Db(p.Cc,yb)});b.kb(u,"visibility","visible");a.Jb(R,P);Ib();n.gc&&b.c(j,"keydown",function(a){if(a.keyCode==37)yb(-n.gc,d);else a.keyCode==39&&yb(n.gc,d)});var h=n.Xb;h=w(h);A.Fb(h,h,0)}};b.Kb(a)};h.of=21;h.De=22;h.pf=23;h.yf=24;h.xf=25;h.Me=26;h.Sf=27;h.Ee=28;h.ze=31;h.Ae=32;h.Bf=202;h.Be=203;h.He=206;h.Ge=207;h.Fe=208;h.Xc=209;jssor_1_slider_init=function(){var f=[[{b:900,d:2e3,x:-379,e:{x:7}}],[{b:900,d:2e3,x:-379,e:{x:7}}],[{b:-1,d:1,o:-1,sX:2,sY:2},{b:0,d:900,x:-171,y:-341,o:1,sX:-2,sY:-2,e:{x:3,y:3,sX:3,sY:3}},{b:900,d:1600,x:-283,o:-1,e:{x:16}}]],i={Bb:1,rc:800,nc:e.md,Re:{N:u,Ec:f},Pe:{N:t},Qe:{N:s}},d=new h("jssor_1",i);function a(){var b=d.M.parentNode.clientWidth;if(b){b=c.min(b,3e3);d.ye(b)}else g.setTimeout(a,30)}a();b.c(g,"load",a);b.c(g,"resize",a);b.c(g,"orientationchange",a)}})(window,document,Math,null,true,false)