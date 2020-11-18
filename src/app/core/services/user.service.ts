import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

import { environment } from '../../../environments/environment';
import { User } from '../../shared/models/user.model';

@Injectable({ providedIn: 'root' })
export class UserService {
    userId:string;
    constructor(private http: HttpClient) { }

    getAll() {
        return this.http.get<User[]>(`${environment.apiUrl}/user`);
    }
    register(user: User) {
      return this.http.post(`${environment.apiUrl}/user/register`, user);
  }

  delete(id: number) {
      return this.http.delete(`${environment.apiUrl}/user/${id}`);
  }
}