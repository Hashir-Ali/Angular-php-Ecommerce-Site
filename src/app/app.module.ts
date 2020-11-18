import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import {FormsModule,ReactiveFormsModule } from '@angular/forms';
import { HttpClientModule } from '@angular/common/http';
import { RouterModule } from '@angular/router';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { HomeComponent } from '../app/modules/home/components/home/home.component';
import { LoginComponent } from '../app/modules/login/login.component';
import { UserComponent } from './modules/admin/user/pages/user/user.component';
import { AboutComponent } from '../app/modules/home/components/about/about.component';
import { PartyComponent } from '../app/modules/home/components/party/party.component';
import { ContactComponent } from '../app/modules/home/components/contact/contact.component';
import { RegisterComponent } from '../app/modules/register/register.component';
import { AuthGuard } from './core/guards/auth.guard';
import { UserModule } from './modules/admin/user/user.module';
import { WishlistComponent } from './modules/admin/user/pages/wishlist/wishlist.component';

@NgModule({
  declarations: [
    AppComponent,
    HomeComponent,
    LoginComponent,
    AboutComponent,
    PartyComponent,
    ContactComponent,
    RegisterComponent
  ],
  imports: [
    BrowserModule,
    FormsModule,
    UserModule,
    HttpClientModule,
    ReactiveFormsModule,
    RouterModule.forRoot([
      {path: '', component: HomeComponent },
      {path: 'login', component: LoginComponent},
      {path: 'user/:id', component: UserComponent,canActivate: [AuthGuard]},
      {path: 'whislist', component: WishlistComponent},
      {path: 'register', component: RegisterComponent},
      // otherwise redirect to home
    { path: '**', redirectTo: '' }
    ])
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
