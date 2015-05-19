# Component theme

The idea of component themes is to use the concept of [component design] on [wordpress] theme.

## Dependencies
- [nodejs]
- [riotjs]
- [jquery]

## How to create components?

The [wordpress] components are built with [riotjs]
and `api.php`

- `npm install`
- Components are built with [riotjs] (don't use riot compiler since we pre-compile riot with gulp task to `app.js`)
- All the Ajax request are sent to `ajaxurl` ([1])
- The request then processing in `functions.php`
- After the component is ready `gulp script` will build all the components in the theme.

---
- 1 - Ajax in wordpress plugins

[component design]:http://en.wikipedia.org/wiki/Component-based_software_engineering
[wordpress]:https://wordpress.org/
[riotjs]:https://muut.com/riotjs/
[jquery]:https://jquery.com/
[nodejs]:https://nodejs.org/

[1]:https://codex.wordpress.org/AJAX_in_Plugins
