import ReceptekController from "./Controller/ReceptekController.js";
import EgyReceptController from "./Controller/ReceptekController.js";

class Init {
    constructor(){
        new ReceptekController;
        new EgyReceptController;
    }
}

$(function () {
    new Init();
});