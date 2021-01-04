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
      "x-rapidapi-key": '2f7f76058bmsh50338ed2bbe3803p1c9875jsn3c2af1857582',
      "x-rapidapi-host": "taobao-api.p.rapidapi.com"
    });
    return this.httpClient.get<any>(`https://taobao-api.p.rapidapi.com/api?api=item_search&page_size=40&sort=default&q=${value}`, {headers : headers});
  }

  getItemDetail(value): Observable<any> {
    let headers = new HttpHeaders({
      "x-rapidapi-key": '2f7f76058bmsh50338ed2bbe3803p1c9875jsn3c2af1857582',
      "x-rapidapi-host": "taobao-api.p.rapidapi.com"
    });
    return this.httpClient.get<any>(`https://taobao-api.p.rapidapi.com/api?api=item_detail_simple&num_iid=${value}`, {headers : headers});
  }
}
