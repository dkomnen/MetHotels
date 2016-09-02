import { Component } from 'angular2/core';
import { RoomsSearchComponent } from './roomsSearch.component';
import {Pipe} from 'angular2/core';
@Component({
    selector: 'methotels-app',
    templateUrl: 'app/views/main-page.html',
    directives: [RoomsSearchComponent]
})
export class AppComponent {

    constructor(){

    }
}