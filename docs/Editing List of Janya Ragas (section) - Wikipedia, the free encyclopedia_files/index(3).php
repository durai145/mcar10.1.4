// All user-facing messages
// TODO: Document usage
mw.usability.addMessages( { 
'cite-section-label' : 'Cite',
'cite-template-list' : 'Templates',
'cite-named-refs-label' : 'Named references',
'cite-named-refs-title' : 'Insert a named reference',
'cite-named-refs-button' : 'Named references',
'cite-named-refs-dropdown' : 'Named references', // Used on the top of the named refs list dropdown
'cite-errorcheck-label' : 'Error check',
'cite-errorcheck-button' : 'Check for errors',
'cite-dialog-web' : 'Web citation',
'cite-dialog-news' : 'News citation',
'cite-dialog-book' : 'Book citation',
'cite-dialog-journal' : 'Journal citation',
'cite-form-submit' : 'Insert',
'cite-form-showhide' : 'Show/hide extra fields',
'cite-no-namedrefs' : 'Cannot find any named references on the page',
'cite-namedrefs-intro' : "Select a name from the list to see the ref content. Click 'Insert' to insert a reference to it in the text.",
'cite-raw-preview' : 'Wikitext:',
'cite-parsed-label' : 'Parsed wikitext:',
'cite-form-parse' : 'Show parsed preview',
'cite-refpreview' : 'Preview',
'cite-name-label' : 'Ref name',
'cite-group-label' : 'Ref group',
'cite-errorcheck-submit' : 'Check',
'cite-errorcheck-heading' : 'Check for the following errors:',
'cite-error-unclosed' : 'Unclosed <span style="font-family:monospace">&lt;ref&gt;</span> tags',
'cite-error-samecontent' : 'References with the same content',
'cite-error-templates' : 'References not using a <a href="//en.wikipedia.org/wiki/Wikipedia:Citation_templates">citation template</a>',
'cite-error-repeated' : 'Multiple references with the same name',
'cite-error-undef' : 'Usage of undefined named references',
'cite-error-samecontent-msg' : 'Multiple refs contain the same content: $1',
'cite-error-repeated-msg' : 'Mutiple refs are given the name: \'$1\'',
'cite-error-templates-msg' : 'Does not use a template: $1',
'cite-form-reset' : 'Reset form',
'cite-loading' : 'Loading data', // Shown while pagetext is being downloaded from the API
'cite-insert-date' : 'Insert current date', // Alt/title text for 'insert date' icon
'cite-err-report-heading' : 'Citation error report', // Heading for error report table
'cite-err-report-close' : 'Close', // Alt/title text for 'close' icon on error report
'cite-err-report-empty' : 'No errors found', // Message displayed in the error report list if there are no errors
'cite-autofill-alt' : 'Autofill', // Alt text for autofill button image
'cite-work-tooltip' : 'Name of journal, magazine, newspaper, periodical or website',
'cite-authorlink-tooltip' : 'If the author has an article, the name of the article',
'cite-at-tooltip' : 'Position within the resource (when page is inappropriate)',
'cite-ref-tooltip' : 'ID for anchor (for creating a linkable reference)',
'cite-postscript-tooltip' : 'If specified, overrides the default behavior of terminating the citation with a period',
'cite-page-tooltip' : 'Page in the source that supports the content.',
'cite-pages-tooltip' : 'Pages in the source that supports the content; separate page ranges with an en dash (–); separate non-sequential pages with a comma (,); do not use to indicate the total number of pages in the source.',
'cite-samecontent-desc' : 'Check for references with the same content',
'cite-samecontent-error' : 'Multiple references contain the same content',
'cite-repeated-desc' : 'Multiple references with the same name',
'cite-repeated-error' : 'Multiple references are using the same name',
'cite-undefined-desc' : 'Usage of undefined named references',
'cite-undefined-error' : 'A named reference is used but not defined',
'cite-first-label' : 'First name',
'cite-last-label' : 'Last name',
'cite-title-label' : 'Title',
'cite-work-label' : 'Work',
'cite-newspaper-label' : 'Newspaper',
'cite-journal-label' : 'Journal',
'cite-publisher-label' : 'Publisher',
'cite-accessdate-label' : 'Access date',
'cite-author-label' : 'Author',
'cite-authorlink-label' : "Author's article",
'cite-coauthors-label' : 'Coauthors',
'cite-archiveurl-label' : 'Archive URL',
'cite-archivedate-label' : 'Archive date',
'cite-location-label' : 'Location',
'cite-page-label' : 'Page',
'cite-pages-label' : 'Pages',
'cite-at-label' : 'At',
'cite-chapter-label' : 'Chapter',
'cite-volume-label' : 'Volume',
'cite-series-label' : 'Series',
'cite-issue-label' : 'Issue',
'cite-language-label' : 'Language',
'cite-format-label' : 'Format',
'cite-date-label' : 'Date',
'cite-month-label' : 'Month',
'cite-year-label' : 'Year',
'cite-quote-label' : 'Quote',
'cite-author2-label' : '2nd author',
'cite-author3-label' : '3rd author',
'cite-author4-label' : '4th author',
'cite-author5-label' : '5th author',
'cite-agency-label' : 'Agency',
'cite-editor-label' : 'Editor',
'cite-editor1-first-label' : "Editor's first",
'cite-editor1-last-label' : "Editor's last",
'cite-editor1-link-label' : "Editor's article",
'cite-edition-label' : 'Edition',
'cite-trans_title-label' : 'Translated title',
'cite-ref-label' : 'Ref',
'cite-postscript-label' : 'Postscript',
'cite-url-label' : 'URL',
'cite-doi-label' : 'DOI',
'cite-isbn-label' : 'ISBN',
'cite-pmid-label' : 'PMID',
'cite-issn-label' : 'ISSN',
'cite-pmc-label' : 'PMC',
'cite-oclc-label' : 'OCLC',
'cite-bibcode-label' : 'Bibcode',
'cite-id-label' : 'ID'
});

// Load configuration for site
var RefToolbarLocal = importScript('MediaWiki:RefToolbarConfig.js');