import { Component, OnInit, ViewChild, ElementRef, Inject, } from '@angular/core';
import { HomeServiceService } from '../home-service.service';
@Component({
selector: 'app-home',
templateUrl: './home.component.html',
styleUrls: ['./home.component.scss']
})
export class HomeComponent implements OnInit {
public currentUser;
constructor(public homeService : HomeServiceService) {
this.currentUser = localStorage.getItem('currentUser')? JSON.parse(localStorage.getItem('currentUser')) : '';
}
@ViewChild('searchDiv', {static : false}) searchDiv:ElementRef;
public searchedItems = [];
public searchResponse;

serachItems(value){
    this.homeService.searchItems(value).subscribe((res)=> {
        console.log(res);
        this.searchResponse = res;
        this.searchedItems = res.result.item;
        setTimeout(() => this.searchDiv.nativeElement.scrollIntoView(), 500);
      });
}

ngOnInit() {

}
}