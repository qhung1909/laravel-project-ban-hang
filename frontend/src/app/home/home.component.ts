import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { Task } from '../../../task';
@Component({
  selector: 'app-home',
  standalone: true,
  imports: [CommonModule],
  templateUrl: './home.component.html',
  styleUrl: './home.component.css'
})
export class HomeComponent  {
  list_task: Task[] = []
  ngOnInit(): void {
    fetch(`http://127.0.0.1:8000/api/product`)
    .then( res => res.json())
    .then( data =>{
      this.list_task = data
    })
  }
}
