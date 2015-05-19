<wp-menu>

    <script>
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
    </script>
    <style scoped>
        
    </style>
</wp-menu>