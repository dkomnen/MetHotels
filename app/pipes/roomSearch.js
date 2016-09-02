System.register(['angular2/core'], function(exports_1, context_1) {
    "use strict";
    var __moduleName = context_1 && context_1.id;
    var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
        var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
        if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
        else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
        return c > 3 && r && Object.defineProperty(target, key, r), r;
    };
    var __metadata = (this && this.__metadata) || function (k, v) {
        if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
    };
    var core_1;
    var RoomsSearchPipe;
    return {
        setters:[
            function (core_1_1) {
                core_1 = core_1_1;
            }],
        execute: function() {
            RoomsSearchPipe = (function () {
                function RoomsSearchPipe() {
                }
                RoomsSearchPipe.prototype.transform = function (data, params) {
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
                            }
                            else {
                                if (room.beds == bedsNum) {
                                    result.push(room);
                                }
                            }
                        }
                        else {
                            if (room.roomArea == sqMeters) {
                                result.push(room);
                            }
                        }
                    }
                    console.log("Beds: " + JSON.stringify(bedsNum) + ", Squares: " + JSON.stringify(sqMeters) + " Result: " + JSON.stringify(result));
                    return Array.from(result);
                };
                RoomsSearchPipe = __decorate([
                    core_1.Pipe({
                        name: 'RoomsSearchPipe'
                    }), 
                    __metadata('design:paramtypes', [])
                ], RoomsSearchPipe);
                return RoomsSearchPipe;
            }());
            exports_1("RoomsSearchPipe", RoomsSearchPipe);
        }
    }
});
//# sourceMappingURL=roomSearch.js.map