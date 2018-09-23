import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FullCalendarModule } from 'ng-fullcalendar';

import { AppComponent } from './app.component';
import { MaterialDashboardComponent } from './material-dashboard/material-dashboard.component';
import { NoteToSelfComponent } from './note-to-self/note-to-self.component';
import { MatGridListModule, MatCardModule, MatMenuModule, MatIconModule, MatButtonModule } from '@angular/material';
import { LayoutModule } from '@angular/cdk/layout';
import { CalendarComponent } from './calendar/calendar.component';
import { FullCalendarComponent } from './full-calendar/full-calendar.component';

@NgModule({
  declarations: [
    AppComponent,
    MaterialDashboardComponent,
    CalendarComponent,
    NoteToSelfComponent,
    FullCalendarComponent
  ],
  imports: [
    BrowserModule,
    FullCalendarModule,
    MatGridListModule,
    MatCardModule,
    MatMenuModule,
    MatIconModule,
    MatButtonModule,
    LayoutModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
