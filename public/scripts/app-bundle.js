define('app',["require", "exports"], function (require, exports) {
    "use strict";
    var App = (function () {
        function App() {
            this.message = 'Hello World!';
        }
        return App;
    }());
    exports.App = App;
});

define('environment',["require", "exports"], function (require, exports) {
    "use strict";
    Object.defineProperty(exports, "__esModule", { value: true });
    exports.default = {
        debug: true,
        testing: true
    };
});

define('main',["require", "exports", "./environment"], function (require, exports, environment_1) {
    "use strict";
    Promise.config({
        warnings: {
            wForgottenReturn: false
        }
    });
    function configure(aurelia) {
        aurelia.use
            .standardConfiguration()
            .feature('resources');
        if (environment_1.default.debug) {
            aurelia.use.developmentLogging();
        }
        if (environment_1.default.testing) {
            aurelia.use.plugin('aurelia-testing');
        }
        aurelia.start().then(function () { return aurelia.setRoot(); });
    }
    exports.configure = configure;
});

define('resources/index',["require", "exports"], function (require, exports) {
    "use strict";
    function configure(config) {
    }
    exports.configure = configure;
});

define('text!app.html', ['module'], function(module) { module.exports = "<template><nav class=\"navbar navbar-default\"><div class=container-fluid><div class=navbar-header><button type=button class=\"navbar-toggle collapsed\" data-toggle=collapse data-target=#commonNav><span class=sr-only>Toggle navigation</span><span class=icon-bar></span><span class=icon-bar></span><span class=icon-bar></span></button><a class=navbar-brand href=index.html><img id=brand-img src=resources/plain-black.png><span id=brand class=nice><b>RAMEN</b></span></a></div><div class=\"collapse navbar-collapse\" id=commonNav><ul class=\"nav navbar-nav\"><li><a data-toggle=collapse data-target=.navbar-collapse href=index.html>Home</a></li><li class=dropdown><a href=# class=dropdown-toggle data-toggle=dropdown role=button aria-expanded=false>Projects<span class=caret></span></a><ul class=dropdown-menu role=menu><li><a data-toggle=collapse data-target=.navbar-collapse href=projects-intro.html>Why Projects?</a></li><li class=divider></li><li><a data-toggle=collapse data-target=.navbar-collapse href=index.html#projects>Project BLU (coming soon)</a></li><li><a data-toggle=collapse data-target=.navbar-collapse href=index.html#projects>Project CaMo (coming soon)</a></li></ul></li><li><a data-toggle=collapse data-target=.navbar-collapse href=our-story.html>Our Story</a></li><li><a data-toggle=collapse data-target=.navbar-collapse href=index.html#support>Support Us</a></li></ul></div></div></nav><h1>${message}</h1></template>"; });
define('text!test.html', ['module'], function(module) { module.exports = "<!DOCTYPE html><html><head><meta charset=utf-8><meta http-equiv=X-UA-Compatible content=\"IE=edge\"><meta name=viewport content=\"width=device-width,initial-scale=1\"><meta name=google-site-verification content=am2OTNh4zhr-zJjL5ve1H4im4z04LMnNMduuAcbgBNU><title>RAMEN</title><link rel=icon href=resources/plain-black.png></head><body><div>Hellow</div></body></html>"; });
//# sourceMappingURL=app-bundle.js.map