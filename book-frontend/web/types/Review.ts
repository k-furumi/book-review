type Review = {
    id: number
    book_id: number
    user_id: number
    parent_id: number | null
    title: string
    rate: number
    review: string
    created_at: Date | null
    updated_at: Date | null
}