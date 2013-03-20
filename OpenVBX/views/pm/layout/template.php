<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<title>igrou.ps</title>
	<?php echo $_styles; ?>
	<!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	<?php echo $_scripts; ?>

<script type="text/javascript">




var user_id = "";
var group_id = "";

    function changeClass(btn, cls)
    {
      if(!hasClass(btn, cls))
      {
        addClass(btn, cls);
      }
    }

	function hasClass(ele, cls) {
	        return ele.className.match(new RegExp('(\\s|^)' + cls + '(\\s|$)'));
	    }
	    function addClass(ele, cls) {
	        if (!this.hasClass(ele, cls)) ele.className += " " + cls;
	    }
	    function removeClass(ele, cls) {
	        if (hasClass(ele, cls)) {
	            var reg = new RegExp('(\\s|^)' + cls + '(\\s|$)');
	            ele.className = ele.className.replace(reg, ' ');
	        }
	    }
	
$(document).ready(function(){
		$('.group').hide();
		$('.groupsmanage').hide();
	
		$('.accordionHeaders:first').addClass('selected').next('.contentHolder').slideDown();
		$('.accordionHeaders').click(function(){
			$('.group').removeClass('selected');
			$('.group').hide();
			$('.groupsmanage').hide();
			
			$('.accordionHeaders').removeClass('selected');
			$('.contentHolder').slideUp();
			$(this).addClass('selected').next('.contentHolder').slideDown();
		});
		
		$('.accordionHeadersGroup').click(function(){
			$('.accordionHeadersGroup').removeClass('selected');
			$('.contentHolder').slideUp();
			$(this).addClass('selected').next('.contentHolder').slideDown();
		});
		
		$('.groups').click(function(){
			$('.group').removeClass('selected');
			$('.group').show();
			$('.groupsmanage').show();
			
			$('.accordionHeaders').removeClass('selected');
			$('.contentHolder').slideUp();
			$(this).addClass('selected').next('.contentHolder').slideDown();
		});
		
		$('.groupsmanage').click(function(){
			$('.group').removeClass('selected');
			$('.accordionHeaders').removeClass('selected');
		});
	
			
	});
	


$(function() {
	//$('.edit').editable('https://www.example.com/save.php');

	//$('#twipsy').twipsy('show');

	(function(d){d.fn.fcbkcomplete=function(J){return this.queue(function(){function K(){name=g.attr("name");b.bricket&&name.indexOf("[]")==-1&&(name+="[]");var a=d("<"+g.get(0).tagName+' name="'+name+'" id="'+m+'" multiple="multiple" class="'+g.get(0).className+' hidden">');d.each(g.children("option"),function(e,c){c=d(c);a.data(c.val(),c.text());if(c.hasClass("selected")){var b=n(c.text(),c.val(),!0,c.hasClass("locked"));b!==!1&&a.append('<option value="'+c.val()+'" selected="selected" id="opt_'+b+
	'"class="selected">'+c.text()+"</option>")}});g.after(a);g.remove();g=a;d(g).bind("addItem",function(a,c){n(c.title,c.value,0,0,0)});d(g).bind("removeItem",function(a,c){var b=k.children("li[rel="+c.value+"]");b.length&&v(b)});d(g).bind("destroy",function(){k.remove();l.remove();g.show()})}function n(a,e,c,f,w){if(!q())return!1;if(b.prevent_empty_elements&&e=="")return!1;if(b.comma_separator&&b.newel){var o=e.split(",");if(o.length>1){for(a=0;a<o.length;a++)n(d.trim(o[a]),d.trim(o[a]),c,f,w);return!1}}if(b.prevent_duplicate_elements&&
	g.find('option[value="'+p(e,1)+'"]').length>0&&!c)return d("#"+m+"_annoninput").remove(),x(w),!1;var j="bit-box"+(f?" locked":""),f=L(),l=document.createTextNode(p(a)),o=d('<a class="closebutton" href="#"></a>'),j=d('<li class="'+j+'" rel="'+e+'" id="pt_'+f+'"></li>').prepend(l).append(o);k.append(j);o.click(function(){v(d(this).parent("li"));return!1});c||(d("#"+m+"_annoninput").remove(),x(w),c=d('<option value="'+p(e,1)+'" id="opt_'+f+'" class="selected" selected="selected">'+p(a)+"</option>"),
	g.append(c),b.onselect&&t(b.onselect,c),b.onchange&&t(b.onchange,c),g.change());k.children("li.bit-box.deleted").removeClass("deleted");h.hide();return f}function v(a){if(!a.hasClass("locked")){a.fadeOut("fast");var e=a.attr("id");if(b.onremove){var c=e?d("#o"+e+""):g.children("option[value="+a.attr("rel")+"]");t(b.onremove,c)}e?d("#o"+e+"").remove():g.children('option[value="'+a.attr("rel")+'"]').remove();b.onchange&&t(b.onchange,a);a.remove();g.change();y=0}}function x(a){var e=d('<li class="bit-input" id="'+
	m+'_annoninput">'),c=d('<input type="text" class="maininput" size="'+b.input_min_size+'" autocomplete="off">');b.input_tabindex>0&&c.attr("tabindex",b.input_tabindex);b.input_name!=""&&c.attr("name",b.input_name);var g=0;k.append(e.append(c));c.focus(function(){z=!0;q()&&l.fadeIn("fast")});c.blur(function(){z=!1;A?l.fadeOut("fast"):c.focus()});k.click(function(){c.focus();h.length&&c.val().length?h.show():(h.hide(),l.children(".default").show())});c.keypress(function(a){if(a.keyCode==j.enter)return!1;
	a=c.val().length+1;if(b.input_min_size>a)a=b.input_min_size;c.attr("size",a)});c.keydown(function(a){if(E(a.keyCode))return F(a,d(this))});c.keyup(function(a){var e=r(c.val(),1);if(a.keyCode==j.backspace&&e.length==0&&(h.hide(),!k.children("li.bit-box:last").hasClass("locked")))if(k.children("li.bit-box.deleted").length==0)return k.children("li.bit-box:last").addClass("deleted"),!1;else{if(y)return;y=1;k.children("li.bit-box.deleted").fadeOut("fast",function(){v(d(this));return!1})}if(a.keyCode!=
	j.downarrow&&a.keyCode!=j.uparrow&&a.keyCode!=j.leftarrow&&a.keyCode!=j.rightarrow&&e.length!=0){u=0;f=null;if(b.json_url&&q())if(b.cache&&G.get(e))B(e),C();else{g++;var m=g;setTimeout(function(){m==g&&d.getJSON(b.json_url,{tag:p(e)},function(a){z&&r(c.val(),1)==e&&(B(e,a),G.set(e,1),C())})},b.delay)}else B(e),C();l.children(".default").hide();h.show()}});a&&setTimeout(function(){c.focus();l.children(".default").show()},1)}function B(a,e){h.html("");!b.cache&&e!=null&&s.clear();M(a);e!=null&&e.length&&
	d.each(e,function(a,c){s.set(r(c.key),r(c.value))});var c=b.maxshownitems<s.length()?b.maxshownitems:s.length(),j="";d.each(s.search(a),function(e,d){if(!b.filter_selected||!g.children("option[value="+d.key+"]").hasClass("selected")){var f=j,h='<li rel="'+d.key+'">',k=d.value,l=b.filter_begin?"<em>$1</em>$2":"$1<em>$2</em>$3",m=(b.filter_begin?"":"(.*)")+(b.filter_case?"("+a+")(.*)":"("+a.toLowerCase()+")(.*)");try{k=k.replace(RegExp(m,b.filter_case?"g":"gi"),l)}catch(n){}j=f+(h+p(k)+"</li>");u++;
	c--}});h.append(j);b.firstselected&&(f=h.children("li:visible:first"),f.addClass("auto-focus"));u>b.height?h.css({height:b.height*24+"px",overflow:"auto"}):h.css("height","auto");q()&&l.is(":hidden")&&l.show()}function H(){h.children("li").mouseover(function(){h.children("li").removeClass("auto-focus");f=d(this);f.addClass("auto-focus")});h.children("li").mouseout(function(){d(this).removeClass("auto-focus");f=null})}function N(){h.unbind("mouseover").unbind("mouseout").mousemove(function(){H();h.unbind("mousemove")})}
	function E(a){if(a==j.enter||a==j.tab)return!0;if(a==j.comma&&b.comma_separator)return!0}function F(a,e){if(b.prevent_empty_elements&&e.val()=="")if(a.keyCode==j.tab&&b.tab_leaves_input)return!0;else a.preventDefault();if(f==null||f.length==0)d=c=r(e.val());else var c=f.text(),d=f.attr("rel");a.keyCode==j.tab&&b.tab_leaves_input?b.newel&&b.addontab&&window.setTimeout(function(){n(c,d,0,0,0)},1):(b.newel&&b.addontab&&n(c,d,0,0,1),O(a))}function C(){var a=d("#"+m+"_annoninput").children(".maininput");
	H();h.children("li").unbind("mousedown").mousedown(function(){var a=d(this);n(a.text(),a.attr("rel"),0,0,1);h.hide();l.hide()});a.unbind("keydown");a.keydown(function(a){a.keyCode!=j.backspace&&k.children("li.bit-box.deleted").removeClass("deleted");if(E(a.keyCode))return F(a,d(this));a.keyCode==j.downarrow&&I("first");a.keyCode==j.uparrow&&I("last")})}function I(a){N();if(f==null||f.length==0)f=h.children("li:visible:"+a),h.get(0).scrollTop=a=="first"?0:parseInt(f.get(0).scrollHeight,10)*(parseInt(h.children("li:visible").length,
	10)-Math.round(b.height/2));else{f.removeClass("auto-focus");f=a=="first"?f.nextAll("li:visible:first"):f.prevAll("li:visible:first");var e=parseInt(f.prevAll("li:visible").length,10),c=parseInt(f.nextAll("li:visible").length,10);if(((a=="first"?e:c)>Math.round(b.height/2)||(a=="first"?e:c)<=Math.round(b.height/2))&&typeof f.get(0)!="undefined")h.get(0).scrollTop=parseInt(f.get(0).scrollHeight,10)*(e-Math.round(b.height/2))}h.children("li").removeClass("auto-focus");f.addClass("auto-focus")}function O(a){l.hide();
	a.preventDefault();f=null;return!1}function q(){return b.maxitems!=0&&k.children("li.bit-box").length<b.maxitems}function M(a){b.newel&&q()&&(h.children("li[fckb=1]").remove(),a.length!=0&&(a=d('<li rel="'+a+'" fckb="1"">').html(p(a)),h.prepend(a),u++))}function t(a,b){var c={};for(i=0;i<b.get(0).attributes.length;i++)if(b.get(0).attributes[i].nodeValue!=null)c["_"+b.get(0).attributes[i].nodeName]=b.get(0).attributes[i].nodeValue;return a.call(a,c)}function r(a,b){if(typeof b!="undefined"){for(i=
	0;i<a.length;i++){var c=a.charCodeAt(i);if(j.exclamation<=c&&c<=j.slash||j.colon<=c&&c<=j.at||j.squarebricket_left<=c&&c<=j.apostrof)a=a.replace(a[i],escape(a[i]))}a=a.replace(/(\{|\}|\*)/i,"\\$1")}return a.replace(/script(.*)/g,"")}function p(a,b){a=a.toString();a=a.replace("\\","");return typeof b!="undefined"?a:unescape(a)}var b=d.extend({json_url:null,cache:!1,height:"10",newel:!1,addontab:!1,firstselected:!1,filter_case:!1,filter_selected:!1,filter_begin:!1,complete_text:"Start to type...",maxshownitems:30,
	maxitems:10,onselect:null,onchange:null,onremove:null,attachto:null,delay:350,input_tabindex:0,input_min_size:1,input_name:"",tab_leaves_input:!1,comma_separator:!1,prevent_empty_elements:!1,prevent_duplicate_elements:!1,bricket:!0},J),k=null,h=null,l=null,u=0,z=!1,f=null,y=0,A=1,g=d(this),m=g.attr("id"),D=d("<div></div>").after(g),G={set:function(a,b){var c=D.data("cache");typeof c=="undefined"&&(c={});c[a]=b;D.data("cache",c)},get:function(a){var b=D.data("cache");return typeof b=="undefined"?void 0:
	b[a]}},j={enter:13,tab:9,backspace:8,leftarrow:37,uparrow:38,rightarrow:39,downarrow:40,exclamation:33,slash:47,colon:58,at:64,squarebricket_left:91,apostrof:96,comma:188},L=function(){for(var a="",b=0;b<32;b++){var c=Math.floor(Math.random()*61);a+="0123456789ABCDEFGHIJKLMNOPQRSTUVWXTZabcdefghiklmnopqrstuvwxyz".substring(c,c+1)}return a},s={search:function(a){var e=[],c=RegExp((b.filter_begin?"^":"")+a,b.filter_case?"g":"gi");d.each(g.data("cache"),function(a,b){typeof b.search==="function"&&b.search(c)!=
	-1&&e.push({key:a,value:b})});return e},set:function(a,b){var c=g.data("cache");typeof c=="undefined"&&(c={});c[a]=b;g.data("cache",c)},get:function(a){var b=g.data("cache");return typeof b=="undefined"?void 0:b[a]},clear:function(){g.data("cache",{})},length:function(){var a=g.data("cache");return typeof a=="undefined"?0:a.length}};(function(){k=d('<ul class="holder"></ul>');b.attachto?typeof b.attachto=="object"?b.attachto.append(k):d(b.attachto).append(k):g.after(k);l=d('<div class="facebook-auto">');
	b.complete_text!=""&&l.append('<div class="default">'+b.complete_text+"</div>");l.hover(function(){A=0},function(){A=1});h=d('<ul id="'+m+'_feed"></ul>');k.after(l.prepend(h));h.css("width",l.width());K()})();x(0);return this})}})(jQuery);

});


	</script>
	
	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-26105028-1']);
	  _gaq.push(['_setDomainName', 'igrou.ps']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	
	  })();
	
	</script>


  </head>
<body onload="dovalidate(); backToDashboardView(<?= $user_id ?>); return true;">
<div class="container-fluid">
	<script type="text/javascript" charset="utf-8">
	
    $(document).ready(function() {
	
		$("#priority").fcbkcomplete({
		        json_url: "/autocomplete/priority",
		        addontab: true,                   
		        maxitems: 1,
		        height: 2,
				firstselected: true,
		        cache: true,
				filter_case: true,
				filter_hide: true,
				newel: true
		    });

	
		document.getElementById('toolbar').getElementsByTagName('h2')[0].innerHTML = 'Dashboard';
		document.getElementById('pane1content').innerHTML = '<img src="/asset/images/ajax-loader-circle.gif" style="top: 250px; left: 450px; position: relative;">';
		
		/*
        var visualSearch = VS.init({
          container  : $('#search_box_container'),
          query      : 'country: "South Africa" account: 5-samuel title: "Pentagon Papers"',
          // query      : '',
          unquotable : [
            'text',
            'account',
            'filter',
            'access'
          ],
          callbacks  : {
            search : function(query, searchCollection) {
              var $query = $('#search_query');
              $query.stop().animate({opacity : 1}, {duration: 300, queue: false});
              $query.html('<span class="raquo">&raquo;</span> You searched for: <b>' + searchCollection.serialize() + '</b>');
              clearTimeout(window.queryHideDelay);
              window.queryHideDelay = setTimeout(function() {
                $query.animate({
                  opacity : 0
                }, {
                  duration: 1000,
                  queue: false
                });
              }, 2000);
            },
            valueMatches : function(category, searchTerm, callback) {
              switch (category) {
              case 'account':
                  callback([
                    { value: '1-amanda', label: 'Amanda' },
                    { value: '2-aron',   label: 'Aron' },
                    { value: '3-eric',   label: 'Eric' },
                    { value: '4-jeremy', label: 'Jeremy' },
                    { value: '5-samuel', label: 'Samuel' },
                    { value: '6-scott',  label: 'Scott' }
                  ]);
                  break;
                case 'filter':
                  callback(['published', 'unpublished', 'draft']);
                  break;
                case 'access':
                  callback(['public', 'private', 'protected']);
                  break;
                case 'title':
                  callback([
                    'Pentagon Papers',
                    'CoffeeScript Manual',
                    'Laboratory for Object Oriented Thinking',
                    'A Repository Grows in Brooklyn'
                  ]);
                  break;
                case 'city':
                  callback([
                    'Cleveland',
                    'New York City',
                    'Brooklyn',
                    'Manhattan',
                    'Queens',
                    'The Bronx',
                    'Staten Island',
                    'San Francisco',
                    'Los Angeles',
                    'Seattle',
                    'London',
                    'Portland',
                    'Chicago',
                    'Boston'
                  ])
                  break;
                case 'state':
                  callback([
                    "Alabama", "Alaska", "Arizona", "Arkansas", "California",
                    "Colorado", "Connecticut", "Delaware", "District of Columbia", "Florida",
                    "Georgia", "Guam", "Hawaii", "Idaho", "Illinois",
                    "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana",
                    "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota",
                    "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada",
                    "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina",
                    "North Dakota", "Ohio", "Oklahoma", "Oregon", "Pennsylvania",
                    "Puerto Rico", "Rhode Island", "South Carolina", "South Dakota", "Tennessee",
                    "Texas", "Utah", "Vermont", "Virginia", "Virgin Islands",
                    "Washington", "West Virginia", "Wisconsin", "Wyoming"
                  ]);
                  break
                case 'country':
                  callback([
                    "China", "India", "United States", "Indonesia", "Brazil",
                    "Pakistan", "Bangladesh", "Nigeria", "Russia", "Japan",
                    "Mexico", "Philippines", "Vietnam", "Ethiopia", "Egypt",
                    "Germany", "Turkey", "Iran", "Thailand", "D. R. of Congo",
                    "France", "United Kingdom", "Italy", "Myanmar", "South Africa",
                    "South Korea", "Colombia", "Ukraine", "Spain", "Tanzania",
                    "Sudan", "Kenya", "Argentina", "Poland", "Algeria",
                    "Canada", "Uganda", "Morocco", "Iraq", "Nepal",
                    "Peru", "Afghanistan", "Venezuela", "Malaysia", "Uzbekistan",
                    "Saudi Arabia", "Ghana", "Yemen", "North Korea", "Mozambique",
                    "Taiwan", "Syria", "Ivory Coast", "Australia", "Romania",
                    "Sri Lanka", "Madagascar", "Cameroon", "Angola", "Chile",
                    "Netherlands", "Burkina Faso", "Niger", "Kazakhstan", "Malawi",
                    "Cambodia", "Guatemala", "Ecuador", "Mali", "Zambia",
                    "Senegal", "Zimbabwe", "Chad", "Cuba", "Greece",
                    "Portugal", "Belgium", "Czech Republic", "Tunisia", "Guinea",
                    "Rwanda", "Dominican Republic", "Haiti", "Bolivia", "Hungary",
                    "Belarus", "Somalia", "Sweden", "Benin", "Azerbaijan",
                    "Burundi", "Austria", "Honduras", "Switzerland", "Bulgaria",
                    "Serbia", "Israel", "Tajikistan", "Hong Kong", "Papua New Guinea",
                    "Togo", "Libya", "Jordan", "Paraguay", "Laos",
                    "El Salvador", "Sierra Leone", "Nicaragua", "Kyrgyzstan", "Denmark",
                    "Slovakia", "Finland", "Eritrea", "Turkmenistan"
                  ], {preserveOrder: true});
                  break;
              }
            },
            facetMatches : function(callback) {
              callback([
                'account', 'filter', 'access', 'title',
                { label: 'city',    category: 'location' },
                { label: 'address', category: 'location' },
                { label: 'country', category: 'location' },
                { label: 'state',   category: 'location' },
              ]);
            }
          }
        });
		console.log(visualSearch);
		*/

      });
    </script>

    <script type="text/javascript" charset="utf-8">
/*
      $(document).ready(function() {
        var visualSearch = VS.init({
          container  : $('#search_box_container2'),
          query      : '',
          // query      : '',
          unquotable : [
            'text',
            'account',
            'filter',
            'access'
          ],
          callbacks  : {
            search : function(query, searchCollection) {
              console.log(["query", searchCollection.facets(), query]);
              var $query = $('#search_query2');
              $query.stop().animate({opacity : 1}, {duration: 300, queue: false});
              $query.html('<span class="raquo">&raquo;</span> You searched for: <b>' + searchCollection.serialize() + '</b>');
              clearTimeout(window.queryHideDelay2);
              window.queryHideDelay2 = setTimeout(function() {
                $query.animate({
                  opacity : 0
                }, {
                  duration: 1000,
                  queue: false
                });
              }, 2000);
            },
            valueMatches : function(category, searchTerm, callback) {
              switch (category) {
              case 'account':
                  callback([
                    { value: '1-amanda', label: 'Amanda' },
                    { value: '2-aron',   label: 'Aron' },
                    { value: '3-eric',   label: 'Eric' },
                    { value: '4-jeremy', label: 'Jeremy' },
                    { value: '5-samuel', label: 'Samuel' },
                    { value: '6-scott',  label: 'Scott' }
                  ]);
                  break;
                case 'filter':
                  callback(['published', 'unpublished', 'draft']);
                  break;
                case 'access':
                  callback(['public', 'private', 'protected']);
                  break;
                case 'title':
                  callback([
                    'Pentagon Papers',
                    'CoffeeScript Manual',
                    'Laboratory for Object Oriented Thinking',
                    'A Repository Grows in Brooklyn'
                  ]);
                  break;
                case 'city':
                  callback([
                    'Cleveland',
                    'New York City',
                    'Brooklyn',
                    'Manhattan',
                    'Queens',
                    'The Bronx',
                    'Staten Island',
                    'San Francisco',
                    'Los Angeles',
                    'Seattle',
                    'London',
                    'Portland',
                    'Chicago',
                    'Boston'
                  ])
                  break;
                case 'state':
                  callback([
                    "Alabama", "Alaska", "Arizona", "Arkansas", "California",
                    "Colorado", "Connecticut", "Delaware", "District of Columbia", "Florida",
                    "Georgia", "Guam", "Hawaii", "Idaho", "Illinois",
                    "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana",
                    "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota",
                    "Mississippi", "Missouri", "Montana", "Nebraska", "Nevada",
                    "New Hampshire", "New Jersey", "New Mexico", "New York", "North Carolina",
                    "North Dakota", "Ohio", "Oklahoma", "Oregon", "Pennsylvania",
                    "Puerto Rico", "Rhode Island", "South Carolina", "South Dakota", "Tennessee",
                    "Texas", "Utah", "Vermont", "Virginia", "Virgin Islands",
                    "Washington", "West Virginia", "Wisconsin", "Wyoming"
                  ]);
                  break
                case 'country':
                  callback([
                    "China", "India", "United States", "Indonesia", "Brazil",
                    "Pakistan", "Bangladesh", "Nigeria", "Russia", "Japan",
                    "Mexico", "Philippines", "Vietnam", "Ethiopia", "Egypt",
                    "Germany", "Turkey", "Iran", "Thailand", "D. R. of Congo",
                    "France", "United Kingdom", "Italy", "Myanmar", "South Africa",
                    "South Korea", "Colombia", "Ukraine", "Spain", "Tanzania",
                    "Sudan", "Kenya", "Argentina", "Poland", "Algeria",
                    "Canada", "Uganda", "Morocco", "Iraq", "Nepal",
                    "Peru", "Afghanistan", "Venezuela", "Malaysia", "Uzbekistan",
                    "Saudi Arabia", "Ghana", "Yemen", "North Korea", "Mozambique",
                    "Taiwan", "Syria", "Ivory Coast", "Australia", "Romania",
                    "Sri Lanka", "Madagascar", "Cameroon", "Angola", "Chile",
                    "Netherlands", "Burkina Faso", "Niger", "Kazakhstan", "Malawi",
                    "Cambodia", "Guatemala", "Ecuador", "Mali", "Zambia",
                    "Senegal", "Zimbabwe", "Chad", "Cuba", "Greece",
                    "Portugal", "Belgium", "Czech Republic", "Tunisia", "Guinea",
                    "Rwanda", "Dominican Republic", "Haiti", "Bolivia", "Hungary",
                    "Belarus", "Somalia", "Sweden", "Benin", "Azerbaijan",
                    "Burundi", "Austria", "Honduras", "Switzerland", "Bulgaria",
                    "Serbia", "Israel", "Tajikistan", "Hong Kong", "Papua New Guinea",
                    "Togo", "Libya", "Jordan", "Paraguay", "Laos",
                    "El Salvador", "Sierra Leone", "Nicaragua", "Kyrgyzstan", "Denmark",
                    "Slovakia", "Finland", "Eritrea", "Turkmenistan"
                  ]);
                  break;
              }
            },
            facetMatches : function(callback) {
              callback([
                'account', 'filter', 'access', 'title',
                { label: 'city',    category: 'location' },
                { label: 'address', category: 'location' },
                { label: 'country', category: 'location' },
                { label: 'state',   category: 'location' },
              ], {
                  preserveOrder: true
              });
            }
          }
        });
      });
*/
    </script>
	
    <?= $leftbar ?>
	<div class="content">
		<?= $main; ?>
		
		
	</div> <!-- /content -->
</div> <!-- /container -->
<?php echo $footer2; ?>
</body>
</html>
