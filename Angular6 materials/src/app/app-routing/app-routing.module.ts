import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule, Routes } from '@angular/router';
import { TimelineComponent } from '../timeline/timeline.component';

const appRoutes: Routes = [
  {
    path: 'timeline',
    component: TimelineComponent
  }
];

@NgModule({
  imports: [CommonModule,
    RouterModule.forRoot(appRoutes)],
  exports: [RouterModule],
  declarations: []
})
export class AppRoutingModule { }
