import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Set } from './models/set.model';

@Injectable({
  providedIn: 'root'
})
export class ApiService {

  apiURL: string = 'http://localhost:8000/api';

  constructor(private httpClient: HttpClient) {
  }

  public getSets() {
    return this.httpClient.get<Set>(
      `${this.apiURL}/sets`
    );
  }

  public changeVolume(set, sound, volume) {
    return this.httpClient.patch<Set>(
      `${this.apiURL}/sound/change-volume`,
      {"set": set, "sound": sound, "volume": volume}
    )
  }

}
