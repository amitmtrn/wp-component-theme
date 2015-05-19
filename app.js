riot.tag('inner-html', '', function(opts) {
  var p = this.parent.root;
  while (p.firstChild) this.root.appendChild(p.firstChild);

});
riot.tag('wp-menu', '', function(opts) {
        var el = this;
        jQuery.post(
            ajaxurl, 
            {
                'action': 'get_menu',
                'container_class': this.opts.container_class,
                'theme_location': this.opts.theme_location
            }, 
            function(response) {
                el.root.innerHTML = response;
            }
        );
    
});
riot.mount('*');