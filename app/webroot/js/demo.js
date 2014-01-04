function createTimeline() {
    $('#timeline').remove();
    var wrapper = $('<div>').attr('id', 'timeline').appendTo($(document.body));

        
    var options       = {};

            
            options       = {
                animation:   true,
                lightbox:    true,
                showYear:    true,
                allowDelete: true,
                columnMode:  'dual'
            };

    var timeline = new Timeline($('#timeline'), timeline_data);
    timeline.setOptions(options);
    timeline.display();
}



String.prototype.parseURL = function() {
    return this.replace(/[A-Za-z]+:\/\/[A-Za-z0-9-_]+\.[A-Za-z0-9-_:%&~\?\/.=]+/g, function(url) {
        return url.link(url);
    });
};

String.prototype.parseHashtag = function() {
    return this.replace(/[#]+[A-Za-z0-9-_]+/g, function(t) {
        var tag = t.replace("#","%23")
        return t.link("http://search.twitter.com/search?q="+tag);
    });
};