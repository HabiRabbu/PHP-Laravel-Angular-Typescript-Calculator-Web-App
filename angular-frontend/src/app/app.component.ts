import { Component, Injectable, OnInit } from '@angular/core';
import { Form, FormBuilder, FormControl, FormGroup } from '@angular/forms';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable, throwError } from 'rxjs';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})

//let Headers = new HttpHeaders({
//  'Content-Type': 'multipart/form-data'
//});
//let options = {Headers: Headers};

@Injectable()
export class AppComponent{
  title = 'angular-frontend';

constructor(private http: HttpClient){}

calcForm = new FormGroup({
  firstnumber: new FormControl(),
  secondnumber: new FormControl()
});


submitForm(buttonType: any){ 
  console.log('I got here');
  switch(buttonType){
    case '+':
      var formData: any = new FormData();
      //var headers = new Headers();
      //headers.append('firstnumber', this.calcForm.get('firstnumber')?.value);
      //headers.append('firstnumber', this.calcForm.get('firstnumber')?.value);
      formData.append('firstnumber', this.calcForm.get('firstnumber')?.value);
      formData.append('secondnumber', this.calcForm.get('secondnumber')?.value);

      //this.sendToAPI(formData);
      //this.http.post('localhost/api/add', formData, options).pipe();

      //let Headers = new HttpHeaders({
      //  'Content-Type': 'multipart/form-data'
      //});
      //let headers = {Headers: Headers};
      const headers = new HttpHeaders().append('Content-Type', ['multipart/form-data']);

      this.http.post<any>('localhost/api/add', formData, headers).subscribe(
        (res) => console.log(res),
        (err) => console.log(err)
      );;
      
      
      break;
    case '-':
        //do something
      break;
    case '*':
        //do something
      break;
    case '/':
        //do something
      break;
  }

}

//sendToAPI(formData: FormData): Observable<FormData>{
//  return this.http.post<FormData>('localhost/api/add', formData, options).pipe();
//}
}
