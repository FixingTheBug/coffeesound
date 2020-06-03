import { Component } from '@angular/core';
import { ApiService } from './api.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent implements OnInit {

  sets: Set[] = [];

  constructor(private apiService: ApiService) {}

  getSets(): void {
    return this.sets = this.apiService.getSets()
    .subscribe(sets => this.sets = sets);
  }

  ngOnInit(){
    this.getSets();
  }

  title = 'frontend';
}
