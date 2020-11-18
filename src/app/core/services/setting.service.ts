import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';

import { Setting } from '../../shared/models/setting.model';

import { environment } from '../../../environments/environment';

@Injectable({
	providedIn: 'root'
})

export class SettingService {
	private apiUrl = environment.apiUrl;

	constructor(private http: HttpClient) { }

	getAll() {
		return this.http.get<Setting[]>(`${this.apiUrl}/api/settings`);
	}

	getById(id: number) {
		return this.http.get(`${this.apiUrl}/api/settings/${id}`);
	}

	create(setting: Setting) {
		return this.http.post(`${this.apiUrl}/api/settings`, setting);
	}

	delete(id: number) {
		return this.http.delete(`${this.apiUrl}/api/settings/${id}`);
	}

	saveWorkingDays(data) {
		return this.http.post(`${this.apiUrl}/api/working-days`, data);
	}

	getWorkingDays() {
		return this.http.get(`${this.apiUrl}/api/working-days`);
	}

}
