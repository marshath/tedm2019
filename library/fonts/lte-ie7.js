/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'33-icons\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-untitled' : '&#xe000;',
			'icon-untitled-2' : '&#xe01c;',
			'icon-untitled-3' : '&#xe01b;',
			'icon-untitled-4' : '&#xe00f;',
			'icon-untitled-5' : '&#xe010;',
			'icon-untitled-6' : '&#xe011;',
			'icon-untitled-7' : '&#xe012;',
			'icon-untitled-8' : '&#xe013;',
			'icon-untitled-9' : '&#xe014;',
			'icon-untitled-10' : '&#xe015;',
			'icon-untitled-11' : '&#xe018;',
			'icon-untitled-12' : '&#xe019;',
			'icon-untitled-13' : '&#xe00b;',
			'icon-untitled-14' : '&#xe00a;',
			'icon-untitled-15' : '&#xe009;',
			'icon-untitled-16' : '&#xe008;',
			'icon-untitled-17' : '&#xe007;',
			'icon-untitled-18' : '&#xe005;',
			'icon-untitled-19' : '&#xe006;',
			'icon-untitled-20' : '&#xe004;',
			'icon-untitled-21' : '&#xe003;',
			'icon-untitled-22' : '&#xe002;',
			'icon-untitled-23' : '&#xe001;',
			'icon-untitled-24' : '&#xe00c;',
			'icon-untitled-25' : '&#xe01a;',
			'icon-untitled-26' : '&#xe00d;',
			'icon-rss' : '&#xe00e;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, html, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};