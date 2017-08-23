Function.extend({
	bind: function(bind){
		var fn = this, args = $A(arguments), bind = args.shift();
		return function(){
			return fn.apply(bind, args.concat($A(arguments)));
		};
	},
	bindAsEventListener: function(bind){
		var fn = this, args = $A(arguments), bind = args.shift();
		return function(e){
			fn.apply(bind, [e || window.event].concat(args));
			return false;
		};
	}
});

Window.extend({
	stopEvent: function(e){
		if (e.stopPropagation){
			e.stopPropagation();
			e.preventDefault();
		} else {
			e.returnValue = false;
			e.cancelBubble = true;
		}
		return false;
	}
});

Array.extend({
	indexOf: function(obj){
		var l = this.length, i = 0;
		for (i; i < l; i++) if (this[i] == obj) return i;
		return -1;
	},
	last: function(){
		return this[this.length - 1];
	}
});

String.extend({
	sub: function(pattern, replacement){
		var result = '', source = this, match;
		if ($type(replacement) != 'function'){
			var template = new Template(replacement);
			replacement = function(match){
				return template.parse(match);
			}
		}

		while (source.length > 0) {
			if (match = source.match(pattern)) {
				result += source.slice(0, match.index);
				result += (replacement(match) || '').toString();
				source  = source.slice(match.index + match[0].length);
			} else result += source, source = '';
		}
		return result;
	}
});

var Template = new Class({

	initialize: function(template, pattern) {
		this.template = template.toString();
		this.pattern  = pattern || Template.Pattern;
	},

	parse: function(object) {
		return this.template.sub(this.pattern, function(match) {
			var before = match[1];
			if (before == '\\') return match[2];
			return before + (object[match[3]] || '').toString();
		});
	}
});
Template.Pattern = /(^|.|\r|\n)(\{\$(.*?)\})/;