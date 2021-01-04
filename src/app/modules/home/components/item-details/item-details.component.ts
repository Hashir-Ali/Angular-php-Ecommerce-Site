import { Component, OnInit } from '@angular/core';
import { ActivatedRouteSnapshot, ActivatedRoute } from '@angular/router';
import { HomeServiceService } from '../home-service.service';

@Component({
  selector: 'app-item-details',
  templateUrl: './item-details.component.html',
  styleUrls: ['./item-details.component.scss']
})
export class ItemDetailsComponent implements OnInit {

  item_id;
  item_details;
  constructor(private actRoute: ActivatedRoute, public homeService : HomeServiceService) {
    this.item_id = this.actRoute.snapshot.params.uuid;
   }

  ngOnInit() {
    this.getItemDetail();
  }

  getItemDetail(){
    this.homeService.getItemDetail(this.item_id).subscribe((res)=> {
      console.log(res);
      this.item_details = res.result;
    });
  }

}
