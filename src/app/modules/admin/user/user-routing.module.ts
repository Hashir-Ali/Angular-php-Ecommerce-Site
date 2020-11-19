import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { CartComponent } from './pages/cart/cart.component';
import { ManageProductsComponent } from './pages/manage-products/manage-products.component';
import { ManageSalesComponent } from './pages/manage-sales/manage-sales.component';
import { MyOrdersComponent } from './pages/my-orders/my-orders.component';
import { RequestWithdrawalComponent } from './pages/request-withdrawal/request-withdrawal.component';
import { TopUpAmountComponent } from './pages/top-up-amount/top-up-amount.component';

import { UserComponent } from './pages/user/user.component';
import { WishlistComponent } from './pages/wishlist/wishlist.component';

const routes: Routes = [
  {
		path: 'user' ,
		children: [
			{
				path: '',
				component: UserComponent
			},
			{
				path: 'wishlist',
				
				component: WishlistComponent,
			},
			{
				path: 'cart',
				
				component: CartComponent,
      },
      {
				path: 'my-orders',
				
				component: MyOrdersComponent,
      },
      {
				path: 'top-up-amount',
				
				component: TopUpAmountComponent,
      },
      {
				path: 'manage-products',
				
				component: ManageProductsComponent,
      },
      {
				path: 'manage-sales',
				
				component: ManageSalesComponent,
      },
      {
				path: 'request-withdrawal',
				
				component: RequestWithdrawalComponent,
      },
      
		]
	}
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule]
})
export class UserRoutingModule { }
