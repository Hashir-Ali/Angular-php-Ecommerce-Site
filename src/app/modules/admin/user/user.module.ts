import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { UserRoutingModule } from './user-routing.module';
import { UserComponent } from './pages/user/user.component';
import { UserHeaderComponent } from './components/user-header/user-header.component';
import { UserSidebarComponent } from './components/user-sidebar/user-sidebar.component';
import { WishlistComponent } from './pages/wishlist/wishlist.component';
import { CartComponent } from './pages/cart/cart.component';
import { MyOrdersComponent } from './pages/my-orders/my-orders.component';
import { TopUpAmountComponent } from './pages/top-up-amount/top-up-amount.component';
import { ManageProductsComponent } from './pages/manage-products/manage-products.component';
import { ManageSalesComponent } from './pages/manage-sales/manage-sales.component';
import { RequestWithdrawalComponent } from './pages/request-withdrawal/request-withdrawal.component';

@NgModule({
  declarations: [UserComponent, UserHeaderComponent, UserSidebarComponent, WishlistComponent, CartComponent, MyOrdersComponent, TopUpAmountComponent, ManageProductsComponent, ManageSalesComponent, RequestWithdrawalComponent],
  imports: [
    CommonModule,
    UserRoutingModule,
    RouterModule
  ]
})
export class UserModule { }
