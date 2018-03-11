import { BrowserModule } from '@angular/platform-browser';
import { NgModule, NO_ERRORS_SCHEMA } from '@angular/core';
import { MDBBootstrapModule } from 'angular-bootstrap-md';

import { AppComponent } from './app.component';
import { LayoutComponent } from './layout/layout.component';
import { Http, Response, RequestOptions, Headers, HttpModule } from '@angular/http';


@NgModule({
  declarations: [
    AppComponent, LayoutComponent
  ],
  imports: [
    BrowserModule,
    MDBBootstrapModule.forRoot(), HttpModule
  ],
  schemas: [ NO_ERRORS_SCHEMA ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
