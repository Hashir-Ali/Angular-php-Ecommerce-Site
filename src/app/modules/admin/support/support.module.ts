import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';

import { SupportRoutingModule } from './support-routing.module';
import { SupportHeaderComponent } from './components/support-header/support-header.component';
import { SupportSidebarComponent } from './components/support-sidebar/support-sidebar.component';
import { SupportComponent } from './pages/support/support.component';

@NgModule({
  declarations: [SupportHeaderComponent, SupportSidebarComponent, SupportComponent],
  imports: [
    CommonModule,
    SupportRoutingModule
  ]
})
export class SupportModule { }
