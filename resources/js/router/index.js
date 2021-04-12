import Home from '../views/Home'
import Category from '../views/category/Index'

export default
{
    mode:'history',
    linkActiveClass:'active',
    routes: [
        {
            path:'/',
            name:'home',
            component: Home,
        },
        {
            path:'/category',
            name:'category',
            component: Category,
        },
    ]
}