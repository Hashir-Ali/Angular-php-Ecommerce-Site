import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { TopUpAmountComponent } from './top-up-amount.component';

describe('TopUpAmountComponent', () => {
  let component: TopUpAmountComponent;
  let fixture: ComponentFixture<TopUpAmountComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ TopUpAmountComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(TopUpAmountComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
