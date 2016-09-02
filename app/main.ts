import { bootstrap } from 'angular2/platform/browser';
import { Http, Headers, HTTP_PROVIDERS } from 'angular2/http';
import { ROUTER_PROVIDERS } from 'angular2/router';
import { AppComponent } from './components/app.component';
import { bind } from 'angular2/core';
bootstrap(AppComponent, [HTTP_PROVIDERS,ROUTER_PROVIDERS]);