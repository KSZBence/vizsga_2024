import axios from "axios";

export default class DataService{
    constructor(){

    }

    getData(vegpont, callback) {
        axios.get(vegpont)
            .then(function (response) {
                callback(response.data)
                console.log("called back");
            })
            .catch(function (error) {
                // handle error
                /* console.log(error) */;
            })
            
    }
}