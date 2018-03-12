import { Component, OnInit } from '@angular/core';
import { Http, RequestOptions, Headers } from '@angular/http';
import { environment } from '../../environments/environment';
import { Observable } from "rxjs/Observable";
import 'rxjs/add/operator/map';
@Component({
  selector: 'app-layout',
  templateUrl: './layout.component.html'
})

export class LayoutComponent implements OnInit {

    constructor(private http: Http){
    }

    ngOnInit(){
      this.loadData();
    }

    loadData(){
      this.http.get('http://localhost/suppare/backend/web/index.php?r=category').map((response)=>{
        console.log(response) 
      }).subscribe();
    }

} 