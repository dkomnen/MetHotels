import {Component} from 'angular2/core';
import {RoomsSearchPipe} from "../pipes/roomSearch";
import {Http, Response, HTTP_PROVIDERS} from "angular2/http";
import 'rxjs/Rx';
@Component({
    pipes: [RoomsSearchPipe],
    selector: 'room-search',
    templateUrl: 'app/templates/roomSearch.html'
})
export class RoomsSearchComponent {

    bedsNum:String = "";
    sqMeters:String = "";
    rooms: Array<Object>;
    constructor(http: Http) {
        http.get('http://localhost/MetHotels/core/api/roomSearch.php')
            .map(response => response.json())
            .subscribe(rooms => this.rooms = rooms);
        }
}