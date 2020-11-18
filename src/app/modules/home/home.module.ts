import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { HomeRoutingModule } from './home-routing.module';
import { HomeComponent } from './components/home/home.component';
import { AboutComponent } from './components/about/about.component';
import { PartyComponent } from './components/party/party.component';
import { ContactComponent } from './components/contact/contact.component';

@NgModule({
  declarations: [HomeComponent, AboutComponent, PartyComponent, ContactComponent],
  imports: [
    CommonModule,
    HomeRoutingModule
  ]
})
export class HomeModule { }
