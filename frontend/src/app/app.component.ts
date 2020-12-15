import { Component, OnInit } from '@angular/core';
import { ApiService } from './api.service';
import { HttpClient } from '@angular/common/http';
import { Set } from './models/set.model';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent implements OnInit {

  sets: Set[] = [];

  constructor(
    private apiService: ApiService,
    private httpClient: HttpClient
  ) {}

  getSets() {
    return this.apiService.getSets().subscribe(sets => this.sets = sets)
  }

  toggleSound(sound) {
    var audioElem = document.getElementById(sound.file + "-sound");
    audioElem.volume = sound.pivot.volume / 100;
    console.log(audioElem.volume);
    if (audioElem.paused) {
      audioElem.play();
      console.log("it's playing");
    } else {
      audioElem.pause();
      console.log("it's not playing");
    }
  }

  changeVolume(set, sound, volume) {
    return this.apiService.changeVolume(set, sound, volume).subscribe(sets => this.sets = sets);
  }

  ngOnInit(){
    this.getSets();
  }

  title = 'frontend';
}
