import axios from 'axios';

const httpClient = axios.create({
    baseURL: 'http://127.0.0.1:8000'
})

export default {

    
    getReceptek() {
        return httpClient.get('/receptek');
    },

    getKategoriak(){
        return httpClient.get('/kategoriak')
    }
    
}