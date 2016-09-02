import {Pipe} from 'angular2/core';
@Pipe({
    name: 'RoomsSearchPipe'
})
export class RoomsSearchPipe {
    transform(data, params) {
        var bedsNum = params[0];
        var sqMeters = params[1];
        var result = [];
        console.log("enter method " + data + " " + params);
        if ((bedsNum == "" && sqMeters == "") || (isNaN(bedsNum) && isNaN(sqMeters))
            || (!isNaN(bedsNum) && isNaN(sqMeters)) || (isNaN(bedsNum) && !isNaN(sqMeters))) {
            return data;
        }

        for (var i = 0; i < data.length; i++) {
            var room = data[i];
            if (bedsNum != "") {
                if (sqMeters != "") {
                    if (room.beds == bedsNum && room.roomArea == sqMeters) {
                        result.push(room);
                    }
                } else {
                    if (room.beds == bedsNum) {
                        result.push(room);
                    }
                }
            } else {
                if (room.roomArea == sqMeters) {
                    result.push(room);
                }
            }

        }
        console.log("Beds: " + JSON.stringify(bedsNum) + ", Squares: " + JSON.stringify(sqMeters) + " Result: " + JSON.stringify(result));

        return Array.from(result);
    }
}