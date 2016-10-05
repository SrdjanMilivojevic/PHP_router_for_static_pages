// Sets the "active" class on the active navigation link.
function addActiveLink (settings) {

    var pageName = window.location.pathname,
        link,
        linkHref;
        pageName = pageName == settings.root ? settings.root + 'home' : pageName;

    $(settings.linksSelector).each(function (i, linkElement) {
        link = $(linkElement);
        linkHref = link.attr('href');

        if (settings.root + linkHref == pageName) {
            link.attr('class', 'active');
        } else {
            link.removeAttr('class');
        }
    });
}
