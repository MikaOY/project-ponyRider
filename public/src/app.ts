import {RouterConfiguration, Router} from 'aurelia-router';

export class App {
  configureRouter(config: RouterConfiguration, router: Router): void {
    config.title = 'RAMEN';
    config.map([
      { route: ['', 'home'], name: 'home',     moduleId: 'components/home/home',         title:'Home' },
      { route: 'projects',   name: 'projects', moduleId: 'components/projects/projects', title:'Home' },
    ]);
    this.router = router;
  }
}
