import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders} from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class HomeServiceService {

  constructor(private httpClient: HttpClient) {}

  searchItems(value): Observable<any> {
    let headers = new HttpHeaders({
      "x-rapidapi-key": '65731adc04msh831b271ff90997ap19abbfjsn21c3427aa730',
      "x-rapidapi-host": "taobao-api.p.rapidapi.com"
    });
    return this.httpClient.get<any>(`https://taobao-api.p.rapidapi.com/api?api=item_search&page_size=40&sort=default&q=${value}`, {headers : headers});
  }
}
