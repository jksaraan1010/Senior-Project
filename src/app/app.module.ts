import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';

import { AppComponent } from './app.component';
import { MaterialDashboardComponent } from './material-dashboard/material-dashboard.component';
import { NoteToSelfComponent } from './note-to-self/note-to-self.component';
import { MatGridListModule, MatCardModule, MatMenuModule, MatIconModule, MatButtonModule } from '@angular/material';
import { LayoutModule } from '@angular/cdk/layout';
import { MainNavComponent } from './main-nav/main-nav.component';
import { CalendarComponent } from './calendar/calendar.component';

@NgModule({
  declarations: [
    AppComponent,
    MaterialDashboardComponent,
    MainNavComponent,
    CalendarComponent,
    NoteToSelfComponent
  ],
  imports: [
    BrowserModule,
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
