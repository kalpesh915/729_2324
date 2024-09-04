import { legacy_createStore as createStore } from "redux";

const reducer = (state = 0, action) => {
    switch(action.type){
        case "INCREMENT":{
            return state += 1;
        }
        case "DECREMENT":{
            return state -= 1;
        }
        case "RESET":{
            return state = 0;
        }
        default :{
            return state;
        }
    }
}

export const store = createStore(reducer);