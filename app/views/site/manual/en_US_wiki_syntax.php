<h3 id="BoldItalics"> Bold Italics</h3>
		Creole:
<pre>
**//bold italics//**
//**bold italics**//
//This is **also** good.//
</pre>
		<p>Recommended XHTML:
		</p>
<pre>
&lt;strong&gt;&lt;em&gt;bold italics&lt;/em&gt;&lt;/strong&gt;
&lt;em&gt;&lt;strong&gt;bold italics&lt;/strong&gt;&lt;/em&gt;
&lt;em&gt;This is &lt;strong&gt;also&lt;/strong&gt; good.&lt;/em&gt;
</pre>
		<p>Sample Output:
		</p>
		<p><b><i>Bold italics</i></b><br />
		<i><b>Bold italics</b></i><br />
		<i>This is <b>also</b> good</i>
		</p>
		<p>Unacceptable:
		</p>
<pre>
**//bold italics**//
//**bold italics//**
</pre>
<h3 id="Headings"> Headings</h3>
		<p>Only three different sized levels of headings are required.  Closing (right-side) equal signs are optional, don't need to be balanced and don't impact the kind of heading generated. Whitespace <b>is</b> allowed before the left-side equal signs.  Only whitespace characters are permitted after the closing equal signs.  Markup parsing is optional within headings.
		</p>
		<p>Creole:
		</p>
<pre>
== Level 1 (largest) =
== Level 2 ==
=== Level 3 ===
==== Level 4 ====
===== Level 5 =====
====== Level 6 ======
=== Also level 3
=== Also level 3 =
=== Also level 3 ==
=== **not** //parsed// ===
</pre>
		<p>Recommended XHTML:
		</p>
<pre>
&lt;h1&gt;Level 1 (largest)&lt;/h1&gt;
&lt;h2&gt;Level 2&lt;/h2&gt;
&lt;h3&gt;Level 3&lt;/h3&gt;
&lt;h4&gt;Level 4&lt;/h4&gt;
&lt;h5&gt;Level 5&lt;/h5&gt;
&lt;h6&gt;Level 6&lt;/h6&gt;
&lt;h3&gt;Also level 3&lt;/h3&gt;
&lt;h3&gt;Also level 3&lt;/h3&gt;
&lt;h3&gt;Also level 3&lt;/h3&gt;
&lt;h3&gt;**not** //parsed//&lt;/h3&gt;
</pre>
		<p><b>Rationale:</b> Using equal signs (<span class="inlinednowiki">=</span>) is the most popular wiki header markup.  Since there are more equal signs for smaller headers, subheaders will become more indented making it easier to get a visual overview from the markup alone.  Closing equal signs are optional, making Creole more flexible since many wiki engines do not require them. <a class="wikipage" href="/wiki/HeadingsReasoning">More details</a>
		</p>
<h3 id="LinksInternalExternalAndInterwiki"> Links - Internal, External and Interwiki</h3>
		<p>Links can appear in paragraphs (also inside bold and italic text), list items and table cells. The links are bold or italic if they are part of bold or italic text. At least images inside links must be supported. Parsing other markup within a link is not required (optional).
		</p>
		<p>Free-standing URLs should be detected and turned into links. Single punctuation characters (<span class="inlinednowiki">,.?!:;"'</span>) at the end of URLs should not be considered part of the URL.
		</p>
		<p>If your wiki supports Interwiki links, links to other wikis should be made by putting the wiki name, then a colon in front of the page title. For example, linking to <span class="inlinednowiki"> [[WikiCreole:Creole1.0]] </span> would link to the Creole spec on this <a class="wikipage" href="/wiki/WikiCreole">WikiCreole</a> wiki.
		</p>
		<p>Creole:
		</p>
<pre>
[[link]]
[[MyBigPage|Go to my page]]
[[http://www.wikicreole.org/]]
http://www.rawlink.org/, http://www.another.rawlink.org
[[http://www.wikicreole.org/|Visit the WikiCreole website]]
[[Weird Stuff|**Weird** //Stuff//]]
[[Ohana:WikiFamily]]
</pre>
		<p>Recommended XHTML:
		</p>
<pre>
&lt;a href="http://www.examplewiki.com/link"&gt;link&lt;/a&gt;
&lt;a href="http://www.examplewiki.com/MyBigPage"&gt;Go to my page&lt;/a&gt;
&lt;a href="http://www.wikicreole.org/"&gt;http://www.wikicreole.org/&lt;/a&gt;
&lt;a href="http://www.rawlink.org/"&gt;http://www.rawlink.org/&lt;/a&gt;, &lt;a href="http://www.another.rawlink.org"&gt;http://www.another.rawlink.org&lt;/a&gt;
&lt;a href="http://www.wikicreole.org/"&gt;Visit the WikiCreole website&lt;/a&gt;
&lt;a href="http://www.examplewiki.com/Weird_Stuff"&gt;**Weird** //Stuff//&lt;/a&gt;
&lt;a href="http://wikiohana.net/cgi-bin/wiki.pl/WikiFamily"&gt;Ohana:WikiFamily&lt;/a&gt;
</pre>
		<p>Sample Output:
		</p>
		<p><a class="editpage" href="/EditX.jsp?page=Link" title="Create 'Link'">link</a><br />
		<a class="wikipage" href="/wiki/MyBigPage">Go to my page</a><br />
		<a class="external" href="http://www.wikicreole.org/">http://www.wikicreole.org/</a><img class="outlink" src="/images/out.png" alt="" /><br />
		<a class="external" href="http://www.rawlink.org/">http://www.rawlink.org/</a><img class="outlink" src="/images/out.png" alt="" />, <a class="external" href="http://www.another.rawlink.org">http://www.another.rawlink.org</a><img class="outlink" src="/images/out.png" alt="" /><br />
		<a class="external" href="http://www.wikicreole.org/">Visit the WikiCreole website</a><img class="outlink" src="/images/out.png" alt="" /><br />
		<a class="editpage" href="/EditX.jsp?page=Weird_Stuff" title="Create 'Weird_Stuff'">__Weird__ ''Stuff''</a><br />
		<a class="interwiki" href="http://wikiohana.net/cgi-bin/wiki.pl/WikiFamily">Ohana:WikiFamily</a><img class="outlink" src="/images/out.png" alt="" />
		</p>
		<p><b>Rationale:</b> Almost all wikis use square brackets (<span class="inlinednowiki">[[]]</span>) to make links.  Using double square brackets allows single square brackets to be used freely without worry of turning them into links. <a class="wikipage" href="/wiki/LinksReasoning">More details</a>
		</p>
<h3 id="Paragraphs"> Paragraphs</h3>
		<p>One or more blank lines end paragraphs.
		A list, table or nowiki block end paragraphs too.
		</p>
		<p>Creole:
		</p>
<pre>
This is my text.

This is more text.
</pre>
		<p>Recommended XHTML:
		</p>
<pre>
&lt;p&gt;This is my text.&lt;/p&gt;

&lt;p&gt;This is more text.&lt;/p&gt;
</pre>
		<p>Sample Output:
		This is my text.
		</p>
		<p>This is more text.
		</p>
		<p><b>Rationale:</b> No markup tags should be necessary to start a new paragraph. <a class="wikipage" href="/wiki/ParagraphsAndLineBreaksReasoning">More details</a>
		</p>
<h3 id="LineBreaks"> Line breaks</h3>
		<p> <span class="inlinednowiki"> \\ </span> (wiki-style) for line breaks. 
		</p>
		<p>Creole:
		</p>
<pre>
This is the first line,\\and this is the second.
</pre>
		<p>Recommended XHTML:
		</p>
<pre>
This is the first line,&lt;br /&gt;
and this is the second.
</pre>
		<p>Sample Output:
		</p>
		<p>This is the first line,<br />
		and this is the second.
		</p>
		<p><b>Rationale: </b> <b>blog-style vs. wiki-style</b><br />
		There was a <a class="wikipage" href="/wiki/Talk.ChangeLinebreakMarkupProposal">long discussion</a> whether to use blog-style or wiki-style (legacy-style) line breaks. We decided to change the original blog-style line break recommendation (treat linebreaks as line breaks) from <a class="wikipage" href="/wiki/Creole0.3">Creole 0.3</a> to the wiki-style linebreaks recommendation. Wikis <b>must</b> support forced line break syntax <span class="inlinednowiki"> \\ </span>.
		</p>
		<p>We encourage engine developers that have already implemented the Creole 0.3 style (blog-style) line breaks not to throw away their implementation, but to add an option so that administrators can choose in which mode to run their installation. This way we hope to gain more experience with blog-style line breaks. In a blog-style line break mode, the forced line break syntax must be supported, so that line breaks will properly migrate when people copy text from a wiki with forced line break characters. <a class="wikipage" href="/wiki/ParagraphsAndLineBreaksReasoning">More details</a>
		</p>
<h3 id="Lists"> Lists</h3>
		<p>List items begin with a <span class="inlinednowiki">*</span> or a <span class="inlinednowiki">#</span> at the beginning of a line.  Whitespace is optional before and after the <span class="inlinednowiki">*</span> or <span class="inlinednowiki">#</span> characters, however a space is required afterwards if the list element starts with bold text.  A list item ends at the line which begins with a <span class="inlinednowiki">*</span> or <span class="inlinednowiki">#</span> character (next item or sublist), blank line, heading, table, or nowiki block; like paragraphs, it can span multiple lines and contain line breaks forced with <span class="inlinednowiki">\\</span>.  It is recommended to have support for a depth of at least five levels of nesting. Bold, italics, links, and nowiki can be used in list items, but they cannot span several list items.
		</p>
		<p><b>About unordered lists and bold:</b> a line starting with <span class="inlinednowiki">**</span> (including optional whitespace before and afterwards), immediately following any list element on a line above, will be treated as a nested unordered list element. Otherwise it will be treated as the beginning of bold text.
		</p>
<h4 id="UnorderedLists"> Unordered Lists</h4>
		<p>Creole:
		</p>
<pre>
* Item 1
** Item 1.1
* Item 2
</pre>
		<p>Recommended XHTML:
		</p>
<pre>
&lt;ul&gt;
&lt;li&gt;Item 1
&lt;ul&gt;
&lt;li&gt;Item 1.1&lt;/li&gt;
&lt;/ul&gt;
&lt;/li&gt;
&lt;li&gt;Item 2&lt;/li&gt;
&lt;/ul&gt;
</pre>
		<p>Sample Output:
		</p>
		<ul><li> Item 1
		<ul><li> Item 1.1
		</li></ul></li><li> Item 2
		</li></ul><p><b>Rationale:</b> A large majority of wiki engines use an asterisk (<span class="inlinednowiki">*</span>) to denote bullet lists.  The multiple asterisk approach for sublists was the first wiki syntax for sublists.  Users do not need to count leading spaces like in markups where a sublist level is determined by the number of its leading spaces. Optional leading spaces can be used to make the Creole markup clearer if the author wishes so. <a class="wikipage" href="/wiki/ListsReasoning">More details</a>
		</p>
<h4 id="OrderedLists"> Ordered Lists</h4>
		<p>Creole:
		</p>
<pre>
# Item 1
## Item 1.1
# Item 2
</pre>
		<p>Recommended XHTML:
		</p>
<pre>
&lt;ol&gt;
	&lt;li&gt;Item 1
		&lt;ol&gt;
			&lt;li&gt;Item 1.1&lt;/li&gt;
		&lt;/ol&gt;
	&lt;/li&gt;
	&lt;li&gt;Item 2&lt;/li&gt;
&lt;/ol&gt;
</pre>
		<p>Sample Output:
		</p>
		<ol><li> Item 1
		<ol><li> Item 1.1
		</li></ol></li><li> Item 2
		</li></ol><p><b>Rationale: </b> The number sign (<span class="inlinednowiki">#</span>) is used for ordered lists in most wikis. <a class="wikipage" href="/wiki/ListsReasoning">More details</a>
		</p>
<h3 id="HorizontalRule"> Horizontal Rule</h3>
		<p>Whitespace is optional before and after the hyphens, but no whitespace is allowed between them.  The four hyphens must be the only characters (other than whitespace) on that line.
		</p>
		<p>Creole:
		</p>
<pre> ---- </pre>
		Recommended XHTML:
<pre> &lt;hr /&gt; </pre>
		<p><b>Rationale:</b> All non-WYSIWYG wikis use hyphens (<span class="inlinednowiki">----</span>) to denote horizontal rules.  Most wikis require four. <a class="wikipage" href="/wiki/HorizontalRuleReasoning">More details</a>
		</p>
<h3 id="ImageInline"> Image (inline)</h3>
		<p>Creole:
		</p>
<pre> {{myimage.png|this is my image}} </pre>
		<p>Recommended XHTML:
		</p>
<pre> &lt;img src="myimage.png" alt="this is my image" /&gt; </pre>
		<p><b>Rationale:</b> The most common image markup was double curly brackets (<span class="inlinednowiki"> {{}} </span>) which will then have the same internal structure as links for consistency. <a class="wikipage" href="/wiki/ImagesReasoning">More details</a>
		</p>
<h3 id="Tables"> Tables</h3>
		<p>All cells are separated by single pipes.  Leading spaces are permitted before the first cell of a row and trailing spaces are permitted at the end of a line. The ending pipe is optional.  You can embed links, bold, italics, line breaks, and nowiki in table cells.  Equal sign directly following pipe defines a header.  Headers can be arranged horizontally or vertically.  Comparison details found on <a class="wikipage" href="/wiki/ListOfTableMarkups">List Of Table Markups</a>
		</p>
		<p>Creole:
		</p>
<pre>
|=Heading Col 1 |=Heading Col 2         |
|Cell 1.1       |Two lines\\in Cell 1.2 |
|Cell 2.1       |Cell 2.2               |
</pre>
		<p>Recommended XHTML:
		</p>
<pre>
&lt;table&gt;
&lt;tr&gt;
	&lt;th&gt;Heading Col 1&lt;/th&gt;
	&lt;th&gt;Heading Col 2&lt;/th&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td&gt;Cell 1.1&lt;/td&gt;
	&lt;td&gt;Two lines&lt;br /&gt;in Cell 1.2&lt;/td&gt;
&lt;/tr&gt;
&lt;tr&gt;
	&lt;td&gt;Cell 2.1&lt;/td&gt;
	&lt;td&gt;Cell 2.2&lt;/td&gt;
&lt;/tr&gt;
&lt;/table&gt;
</pre>
		<p>Sample output:
		</p>
		<table class="wikitable" border="1"><tr class="odd"><th>Heading Col 1 </th><th>Heading Col 2</th></tr>
		<tr><td>Cell 1.1       </td><td>Two lines<br />in Cell 1.2</td></tr>
		<tr class="odd"><td>Cell 2.1       </td><td>Cell 2.2</td></tr>
		</table><p><b>Rationale:</b> Most wikis use single or double pipes to separate table cells.  Single pipes (<span class="inlinednowiki">|</span>) allow better use of space and are faster to type than double pipes since pipes are not usually needed in table cells. <a class="wikipage" href="/wiki/TablesReasoning">More details</a>
		</p>
<h3 id="NowikiPreformatted"> Nowiki (Preformatted)</h3>
		<p>This works inline or as a block. <b>No wiki markup is interpreted between these characters</b>, even tildes which are used as escape characters elsewhere (see below). As a block, the three curly braces should be on one line by itself to open and another line of three curly braces should be on a line by itself to close, without leading spaces.  In a block, characters are displayed in monospace. For inline nowiki text, wiki implementers can decide whether to display this text regularly or in monospace.
		</p>
		<p>Creole:
		</p>
<pre>
{{{
//This// does **not** get [[formatted]] 
}}}
</pre>
		<p>Recommended XHTML:
		</p>
<pre>
&lt;pre&gt;
//This// does **not** get [[formatted]]
&lt;/pre&gt;
</pre>
		<p>Sample Output:
		</p>
<pre>
//This// does **not** get [[formatted]]
</pre>
		<p>Creole:
		</p>
<pre>
Some examples of markup are: {{{** &lt;i&gt;this&lt;/i&gt; ** }}}
</pre>
		<p>Recommended XHTML:
		</p>
<pre>
Some examples of markup are: &lt;tt&gt;** &amp;lt;i&amp;gt;this&amp;lt;/i&amp;gt; **&lt;/tt&gt;
</pre>
		<p>Sample output:
		</p>
		<p>Some examples of markup are: <span class="inlinednowiki">** &lt;i&gt;this&lt;/i&gt; **</span>
		</p>
<h4 id="ClosingBracesInNowiki">Closing braces in nowiki</h4>
		<p>To include closing braces where they might be considered as nowiki or preformatted end tag, there are two additional rules:
		</p>
		<ul><li> In inline nowiki, any trailing closing brace is included in the nowiki span (i.e. in a sequence of more than three closing braces, the end marker is made of the <i>last three braces</i>).
		</li><li> In preformatted blocks, since markers must not be preceded by leading spaces, lines with three closing braces which belong to the preformatted block must follow at least one space. In the rendered output, one leading space is removed.
		</li></ul><p>Creole:
		Inline nowiki with closing braces: <span class="inlinednowiki">{{if (a&gt;b) { b = a; }}}</span>.
		Preformatted block with a line containing three closing braces:
		</p>
<pre>
{{{
if (x != NULL) {
	for (i = 0; i &lt; size; i++) {
		if (x[i] &gt; 0) {
		x[i]--;
	}}}
}}}
</pre>
		<p><b>Rationale: </b> There must be a way for users to enter text which will not be formatted by the wiki engine.  Triple curly brackets (<span class="inlinednowiki">{{{}}}</span>) were chosen due to their visibility and unlikeliness to be in the "code" itself. <a class="wikipage" href="/wiki/PreformattedAndNowikiReasoning">More details</a>; see also <a class="wikipage" href="/wiki/AddNoWikiEscapeProposal">Add No Wiki Escape Proposal</a>.
		</p>
<h3 id="EscapeCharacter">Escape Character</h3>
		<p>The escape character is the tilde (~). Outside nowiki, preformatted, and URL, the escape character only escapes the character immediately following it, provided that it is not a blank (space or line feed). The following character is rendered as is and cannot be a part of any Creole markup.
		</p>
		<p>The escape character disables the automatic conversion of the URL immediately following to links, and any similar mechanism supported by the wiki engine (camelcase wikiwords, copyright sign, etc.)
		</p>
		<p>Example code:
		</p>
<pre>
~#1
http://www.foo.com/~bar/
~http://www.foo.com/
CamelCaseLink
~CamelCaseLink
</pre>
		<p>Example output:
		</p>
		<p>#1 <br />
		<a class="external" href="http://www.foo.com/">http://www.foo.com/</a><img class="outlink" src="/images/out.png" alt="" />~bar/ <br />
		http://www.foo.com/ <br />
		<a class="wikipage" href="/wiki/CamelCaseLink">CamelCaseLink</a> <br />
		CamelCaseLink
		</p>
		<p><b>Rationale:</b> If one needs keyboard characters often in a text, there would be too many distracting triple curly braces to be able to work with the text well.  Therefore an escape character would help to keep people from being so distracted by the nowiki inline and escape character could be used instead.  The tilde was chosen, so it would not conflict with the backslashes in line breaks and because it is a relatively infrequently used character. It is not generally easy to type, but it will also not need to be used often, so in this sense it is also suitable. This way, stars, slashes and other markup characters, when found in the original text, can be easily escaped to be rendered as themselves. <a class="editpage" href="/EditX.jsp?page=EscapeCharacterReasoning" title="Create 'EscapeCharacterReasoning'">Reasoning</a>
		</p>
<h3 id="Placeholder"> Placeholder</h3>
		<p>When there is something advanced, a placeholder will show up, so users will not be confused seeing more than one syntax. (optional for wiki developers)
		</p>
		<p><b>Note:</b> do not confuse this with the plug-in syntax which can be found at <a class="wikipage" href="/wiki/Additions">Additions</a>.
		</p>
		<p>Creole:
		</p>
<pre> &lt;&lt;&lt;x&gt;&gt;&gt; </pre>
		<p><b>Rationale:</b> This was mainly developed due to MediaWiki's extensive use of special characters making it practically impossible to implement Mixed Creole mode. Few wikis use angle brackets (<span class="inlinednowiki">&lt;&lt;&lt;&gt;&gt;&gt;</span>) for markup. This markup is generated by the wiki engine rather then typed in by the user, therefore we use three instead of two markup characters to reserve the markup with two angle brackets for extension elements that are typed in by users. <a class="wikipage" href="/wiki/PlaceholderReasoning">More details</a>.
		</p>
<h3 id="BoldAndOrItalicLinks"> Bold and/or italic links</h3>
		Creole:
<pre>
//[[Important page|this link is italicized]]//
**[[Important page]]**
//**[[Important page]]**//
</pre>
		<p>Recommended XHTML:
		</p>
<pre>
&lt;em&gt;&lt;a href="http://www.examplewiki.com/Important_Page"&gt;this link is italicized&lt;/a&gt;&lt;/em&gt;
&lt;strong&gt;&lt;a href="http://www.examplewiki.com/Important_page"&gt;Important page&lt;/a&gt;&lt;/strong&gt;
&lt;em&gt;&lt;strong&gt;&lt;a href="http://www.examplewiki.com/Important_page"&gt;Important page&lt;/a&gt;&lt;/strong&gt;&lt;/em&gt;
</pre>
		<p>Sample Output:
		<i><a class="editpage" href="/EditX.jsp?page=ImportantPage" title="Create 'ImportantPage'">this link is italicized</a></i><br />
		<b><a class="editpage" href="/EditX.jsp?page=ImportantPage" title="Create 'ImportantPage'">Important page</a></b><br />
		<i><b><a class="editpage" href="/EditX.jsp?page=ImportantPage" title="Create 'ImportantPage'">Important page</a></b></i>
		</p>
<h3 id="BoldItalicsLinksPreInLists"> Bold, Italics, Links, Pre in Lists</h3>
		Creole:
<pre>
* **bold** item
* //italic// item
# item about a [[certain page]]
# {{{ //this// is **not** [[processed]] }}}
</pre>
		<p>Recommended XHTML:
		</p>
<pre>
&lt;ul&gt;
	&lt;li&gt;&lt;strong&gt;bold&lt;/strong&gt; item&lt;/li&gt;
	&lt;li&gt;&lt;em&gt;italic&lt;/em&gt; item&lt;/li&gt;
&lt;/ul&gt;
&lt;ol&gt;
	&lt;li&gt;item about a &lt;a href="http://www.examplewiki.com/certain_page"&gt;certain page&lt;/a&gt;&lt;/li&gt;
	&lt;li&gt;&lt;tt&gt;//this// is **not** [[processed]]&lt;/tt&gt;&lt;/li&gt;
&lt;/ol&gt;
</pre>
		<p>Sample Output:
		</p>
		<ul><li> <b>bold</b> item
		</li><li> <i>italic</i> item
		</li></ul><ol><li> item about a <a class="editpage" href="/EditX.jsp?page=CertainPage" title="Create 'CertainPage'">certain page</a>
		</li><li> <span class="inlinednowiki">//this// is **not** [[processed]]</span> </li></ol>
