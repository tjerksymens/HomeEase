document.addEventListener('DOMContentLoaded', function() {
    // CHECK SCHRIKKELJAAR
    isLeapYear = (year) => {
      return (year % 4 === 0 && year % 100 !== 0 && year % 400 
        !== 0) || (year % 100 === 0 && year % 400 === 0)
    }
  
    getFebDays = (year) => {
      return isLeapYear(year) ? 29 : 28
    }
  
    let calendar = document.querySelector('.calendar')
  
    const month_names = ['Januari', 'Februari', 'Maart', 'April', 'Mei', 'Juni', 'Juli', 'Augustus', 'September', 'Oktober', 'November', 'December']
  
    let month_picker = document.querySelector('#month-picker')
    let month_list = calendar.querySelector('.month-list')
    month_picker.onclick = (e) => {
        e.stopPropagation()
        month_list.classList.add('show')
    }
      
  
    document.addEventListener('click', function(e) {
        if (!month_picker.contains(e.target)) {
          month_list.classList.remove('show')
        }
    })
      
  
    // GENEREER KALENDER
    generateCalendar = (month, year) => {
        let calendar_days = calendar.querySelector('.calendar-days')
        calendar_days.innerHTML = ''

        let calendar_header_year = document.querySelector('#year')

        let days_of_month = [31, getFebDays(year), 31, 30, 31, 30, 31, 31, 30, 31, 30, 31]

        let currDate = new Date()

        month_picker.innerHTML = month_names[month]
        calendar_header_year.innerHTML = year

        let first_day = new Date(month, year, 1)

        for (let i = 0; i < days_of_month[month] + first_day.getDay() - 1; i++) {
            let day = document.createElement('div')
            if (i >= first_day.getDay()) {
            day.innerHTML = i - first_day.getDay() + 1
            day.innerHTML += `<span></span>
            <span></span>
            <span></span>
            <span></span>`
            if (i - first_day.getDay() + 1 === currDate.getDate() && year === currDate.getFullYear() && month === currDate.getMonth()) {
                day.classList.add('curr-date')
            }
            }
            calendar_days.appendChild(day)
        }
    }
  
    let currDate = new Date()
  
    let curr_month = {value: currDate.getMonth()}
    let curr_year = {value: currDate.getFullYear()}
  
    generateCalendar(curr_month.value, curr_year.value)
  
    month_names.forEach((e, index) => {
        let month = document.createElement('div')
        month.innerHTML = `<div>${e}</div>`
        month_list.appendChild(month)
        month.onclick = () => {
        month_list.classList.remove('show')
        curr_month.value = index
        generateCalendar(curr_month.value, curr_year.value)
        }
        month_list.appendChild(month)
    })
  
    document.querySelector('#prev-year').onclick = () => {
        --curr_year.value
        generateCalendar(curr_month.value, curr_year.value)
    }
  
    document.querySelector('#next-year').onclick = () => {
        ++curr_year.value
        generateCalendar(curr_month.value, curr_year.value)
    }
  });
  