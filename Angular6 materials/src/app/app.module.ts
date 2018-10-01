import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { BrowserAnimationsModule } from '@angular/platform-browser/animations';
import { MatTableModule } from '@angular/material';
import { CdkTableModule } from '@angular/cdk/table';
import { HttpClientModule } from '@angular/common/http';
import { RouterModule, Routes } from '@angular/router';

import { AppComponent } from './app.component';
// import { NoteToSelfComponent } from './note-to-self/note-to-self.component';
import { MatButtonModule, MatToolbarModule, MatSidenavModule, MatListModule } from '@angular/material';
import { MatGridListModule, MatCardModule, MatMenuModule, MatIconModule} from '@angular/material';
import { LayoutModule } from '@angular/cdk/layout';
import { MainNavComponent } from './main-nav/main-nav.component';
import { MainDashboardComponent } from './main-dashboard/main-dashboard.component';
import { TimelineComponent } from './timeline/timeline.component';


@NgModule({
  declarations: [
    AppComponent,
    // NoteToSelfComponent,
    MainNavComponent,
    MainDashboardComponent,
    TimelineComponent
  ],
  imports: [
    BrowserModule,
    MatGridListModule,
    MatCardModule,
    MatMenuModule,
    MatIconModule,
    MatButtonModule,
    LayoutModule,
    BrowserAnimationsModule,
    MatTableModule,
    HttpClientModule,
    CdkTableModule,
    MatToolbarModule,
    MatSidenavModule,
    MatListModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
