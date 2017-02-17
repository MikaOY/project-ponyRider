import {Aurelia} from 'aurelia-framework';
import {Router, RouterConfiguration} from 'aurelia-router';

export class App {
  router: Router;

  configureRouter(config: RouterConfiguration, router: Router) {
    config.title = 'RAMEN';
    config.map([
      { route: ['', 'home'], name: 'home',      moduleId: './home',       nav: true, title: 'Home' },
	  { route: 'story',      name: 'our-story', moduleId: './story',      nav: true, title: 'Story' },
	  { route: 'projects',      name: 'projects', moduleId: './projects', nav: true, title: 'Projects' }
    ]);

    this.router = router;
  }
}
