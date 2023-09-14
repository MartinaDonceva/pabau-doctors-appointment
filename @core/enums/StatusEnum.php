<?php

enum StatusEnum: string
{
    case PENDING = 'pending';

    case APPROVED = 'approved';

    case DECLINED = 'declined';
}